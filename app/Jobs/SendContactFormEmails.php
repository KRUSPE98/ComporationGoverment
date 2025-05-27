<?php

namespace App\Jobs;

use App\Mail\ContactFormMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class SendContactFormEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function handle()
    {
	Log::info('Ejecutando el job SendContactFormEmails', $this->data);
        try {
            // Enviar al admin
            Mail::to($this->data['adminEmails'])->send(new ContactFormMail(
                $this->data['name'],
                $this->data['email'],
                $this->data['phone'],
                $this->data['message'],
                'emails.admin_contact',
                'Nuevo mensaje de contacto'
            ));

            // Enviar al usuario
            Mail::to($this->data['email'])->send(new ContactFormMail(
                $this->data['name'],
                $this->data['email'],
                null,
                null,
                'emails.user_confirmation',
                'Confirmación de mensaje enviado'
            ));
        } catch (\Throwable $e) {
            Log::error('Error al enviar correos desde el job SendContactFormEmails: ' . $e->getMessage(), [
                'exception' => $e,
                'data' => $this->data
            ]);
        }
    }
}

