<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class QuestionnaireMailService
{
    /**
     * Envía las respuestas del cuestionario a los correos administrativos configurados
     * y opcionalmente una copia al usuario que respondió.
     *
     * @param array $data
     * @param array $structure
     * @return void
     */
    public function sendQuestionnaireResults(array $data, array $structure): void
    {
        $adminEmailsString = config('mail.admin_emails', env('ADMIN_EMAILS', ''));
        $adminEmails = array_filter(array_map('trim', explode(',', $adminEmailsString)));

        $userEmail = $data['email'] ?? null;
        $userName = $data['full_name'] ?? 'Usuario';

        $title = 'Nuevo Autodiagnóstico Respondido: ' . ($data['company_name'] ?? 'Empresa Familia');

        $htmlContent = view('emails.questionnaire_results', [
            'data' => $data,
            'structure' => $structure,
            'userName' => $userName
        ])->render();

        // Enviar a los administradores
        if (!empty($adminEmails)) {
            foreach ($adminEmails as $recipient) {
                Mail::send('emails.general-email-template', [
                    'generalContent' => $htmlContent,
                    'title' => $title
                ], function ($message) use ($recipient, $title) {
                    $message->to($recipient)->subject($title);
                });
            }
        }

        // Enviar copia de confirmación al usuario
        if (!empty($userEmail) && filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $userSubject = 'Copia de tu Autodiagnóstico - CGF';
            Mail::send('emails.general-email-template', [
                'generalContent' => $htmlContent,
                'title' => $userSubject
            ], function ($message) use ($userEmail, $userSubject) {
                $message->to($userEmail)->subject($userSubject);
            });
        }
    }
}
