<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(public $name) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            // Aqui se especifica el asunto y el remitente del correo electronico.
            // El asunto es el texto que se mostrara en el encabezado del email.
            // El remitente es la direccion de correo electronico que se mostrara como la que envio el email.
            // En este caso, se esta usando una variable de entorno definida en el archivo .env.
            subject: 'This is an Test Mail', // asunto 
            from: new Address(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')), // remitente
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.test', // vista que se mostrara en el cuerpo del email
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
