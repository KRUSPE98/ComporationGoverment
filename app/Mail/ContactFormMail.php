<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $message;
    public $title;
    protected $viewTemplate;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $email
     * @param $phone
     * @param $message
     * @param $viewTemplate
     * @param $title
     */
    public function __construct($name, $email, $phone, $message, $viewTemplate, $title = 'Nuevo Mensaje')
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
        $this->viewTemplate = $viewTemplate;
        $this->title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         // Renderizar la vista del contenido dinámico
         $generalContent = view($this->viewTemplate, [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ])->render(); // Renderiza el contenido dinámico

        return $this->subject($this->title)->view('emails.general-email-template') // Plantilla base
            ->with([
                'generalContent' => $generalContent,  // Pasa el contenido renderizado aquí
                'title' => $this->title, // Título dinámico
            ]);
    }
}
