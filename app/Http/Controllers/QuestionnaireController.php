<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\QuestionnaireSubmitRequest;
use App\Services\QuestionnaireService;
use App\Services\QuestionnaireMailService;

class QuestionnaireController extends Controller
{
    protected $questionnaireService;
    protected $mailService;

    public function __construct(QuestionnaireService $questionnaireService, QuestionnaireMailService $mailService)
    {
        $this->questionnaireService = $questionnaireService;
        $this->mailService = $mailService;
    }

    /**
     * Muestra la vista dedicada del cuestionario
     */
    public function index()
    {
        $questionnaire = $this->questionnaireService->getQuestionnaireData();
        return view('client.sections.questionnaire.index', compact('questionnaire'));
    }

    /**
     * Procesa y envía las respuestas del cuestionario
     */
    public function submit(QuestionnaireSubmitRequest $request)
    {
        $data = $request->validated();
        $allData = $request->all();
        $structure = $this->questionnaireService->getQuestionnaireData();

        try {
            $this->mailService->sendQuestionnaireResults($allData, $structure);

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => '¡Muchas gracias! Tus respuestas han sido enviadas exitosamente. En breve nos pondremos en contacto contigo.'
                ]);
            }

            return redirect()->back()->with('success', '¡Muchas gracias! Tus respuestas han sido enviadas exitosamente.');
        } catch (\Exception $e) {
            Log::error('Error al enviar respuestas del cuestionario: ' . $e->getMessage());

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Ocurrió un error al enviar tus respuestas. Por favor, intenta de nuevo o comunícate directamente.'
                ], 500);
            }

            return redirect()->back()->with('error', 'Ocurrió un error al enviar tus respuestas.');
        }
    }
}
