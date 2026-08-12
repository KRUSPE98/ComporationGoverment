<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\QuestionnaireMailService;
use Illuminate\Support\Facades\Mail;

class QuestionnaireControllerTest extends TestCase
{
    /**
     * Test de acceso a la vista dedicada del cuestionario.
     *
     * @return void
     */
    public function test_can_render_questionnaire_index_page()
    {
        $response = $this->get(route('questionnaire.index'));

        $response->assertStatus(200);
        $response->assertViewIs('client.sections.questionnaire.index');
        $response->assertViewHas('questionnaire');
    }

    /**
     * Test de validación al enviar datos incompletos.
     *
     * @return void
     */
    public function test_submit_fails_validation_with_missing_data()
    {
        $response = $this->postJson(route('questionnaire.submit'), []);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors([
            'privacy_accepted',
            'full_name',
            'email',
            'phone',
            'position',
            'company_relationship',
            'company_name',
            'location',
            'years_in_market',
            'employees_count',
            'family_members_count',
            'products_services',
            'generations_interacting',
        ]);
    }

    /**
     * Test de envío exitoso del cuestionario.
     *
     * @return void
     */
    public function test_submit_successful_sends_email()
    {
        // Mock MailService para evitar el envío real durante las pruebas
        $this->mock(QuestionnaireMailService::class, function ($mock) {
            $mock->shouldReceive('sendQuestionnaireResults')->once()->andReturn(true);
        });

        $payload = [
            'privacy_accepted' => '1',
            'full_name' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'phone' => '1234567890',
            'position' => 'Director General',
            'company_relationship' => 'Soy fundador (a)',
            'company_name' => 'Empresa Ejemplo S.A.',
            'location' => 'Puebla, Puebla',
            'years_in_market' => 10,
            'employees_count' => 25,
            'family_members_count' => 3,
            'products_services' => 'Servicios de consultoría',
            'generations_interacting' => 'Solo la generación fundadora',
            'part1' => [1 => 8, 2 => 9],
            'part2' => [1 => 7, 2 => 10],
            'part3' => [1 => 9, 2 => 8],
        ];

        $response = $this->postJson(route('questionnaire.submit'), $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
        ]);
    }
}
