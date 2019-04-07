<?php

namespace App\Mail;

use App\Contacto;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contacto $contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $contacto = $this->contacto;
        return $this->from('daniel20150154@gmail.com')
                    ->subject("Solicitação de Serviço")
                    ->view('mail.mail', compact("contacto"));
    }
}
