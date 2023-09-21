<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Cliente;

class Welcome extends Mailable
{
     use Queueable, SerializesModels;

    private $cliente;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.welcome')
            ->with('cliente', $this->cliente)
            ->from('nerom24@gmail.com','DWES')
            ->subject('Bienvenido a Laravel');
    }
}
