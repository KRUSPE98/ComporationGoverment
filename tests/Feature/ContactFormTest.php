<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormTest extends TestCase
{
    /**
     * Test de renderizado de la página de contacto.
     *
     * @return void
     */
    public function test_can_render_contact_page()
    {
        $response = $this->get(route('contacto'));

        $response->assertStatus(200);
        $response->assertViewIs('client.sections.contact.contactb');
    }

    /**
     * Test de fallo de validación del formulario de contacto.
     *
     * @return void
     */
    public function test_contact_form_fails_validation_with_missing_data()
    {
        $response = $this->postJson(route('contact.form'), []);

        $response->assertStatus(422);
        $response->assertJson([
            'success' => false
        ]);
        $response->assertJsonStructure(['message']);
    }

    /**
     * Test de envío exitoso del formulario de contacto.
     *
     * @return void
     */
    public function test_contact_form_submit_successfully_sends_emails()
    {
        // Configurar temporalmente correos de administrador en env()
        putenv('ADMIN_EMAILS=admin@example.com');
        $_ENV['ADMIN_EMAILS'] = 'admin@example.com';
        $_SERVER['ADMIN_EMAILS'] = 'admin@example.com';

        Mail::fake();

        $payload = [
            'name' => 'María López',
            'email' => 'maria@example.com',
            'phone' => '1234567890',
            'message' => 'Hola, me gustaría recibir información sobre sus servicios.'
        ];

        $response = $this->postJson(route('contact.form'), $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'message' => 'Mensaje enviado correctamente'
        ]);

        // Verificar que se enviaron los correos
        Mail::assertSent(ContactFormMail::class, function ($mail) {
            return $mail->hasTo('admin@example.com') || $mail->hasTo('maria@example.com');
        });
    }
}
