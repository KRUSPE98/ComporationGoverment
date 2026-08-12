<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\QuestionnaireService;

class QuestionnaireServiceTest extends TestCase
{
    /**
     * Test que QuestionnaireService retorna la estructura esperada desde la configuración.
     *
     * @return void
     */
    public function test_get_questionnaire_data_returns_array_structure()
    {
        $service = new QuestionnaireService();
        $data = $service->getQuestionnaireData();

        $this->assertIsArray($data);
        $this->assertArrayHasKey('title', $data);
        $this->assertArrayHasKey('intro', $data);
        $this->assertArrayHasKey('privacy_notice', $data);
        $this->assertArrayHasKey('instructions', $data);
        $this->assertArrayHasKey('thanks', $data);
        $this->assertArrayHasKey('sections', $data);

        // Validar secciones principales
        $sections = $data['sections'];
        $this->assertArrayHasKey('contact', $sections);
        $this->assertArrayHasKey('company', $sections);
        $this->assertArrayHasKey('part1', $sections);
        $this->assertArrayHasKey('part2', $sections);
        $this->assertArrayHasKey('part3', $sections);
    }

    /**
     * Test que verifica las preguntas en las secciones del cuestionario.
     *
     * @return void
     */
    public function test_questionnaire_parts_contain_questions()
    {
        $service = new QuestionnaireService();
        $data = $service->getQuestionnaireData();

        $this->assertCount(16, $data['sections']['part1']['questions']);
        $this->assertCount(16, $data['sections']['part2']['questions']);
        $this->assertCount(16, $data['sections']['part3']['questions']);
    }
}
