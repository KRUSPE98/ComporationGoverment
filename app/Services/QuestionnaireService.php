<?php

namespace App\Services;

class QuestionnaireService
{
    /**
     * Devuelve la estructura y configuración de preguntas del cuestionario de Autodiagnóstico desde config.
     *
     * @return array
     */
    public function getQuestionnaireData(): array
    {
        return config('questionnaire', []);
    }
}

