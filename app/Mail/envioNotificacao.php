<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class envioNotificacao extends Mailable
{
    use Queueable, SerializesModels;
    private $dados;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('ENVIO DE NOTIFICAÇÃO DE TRANSAÇÃO BANCÁRIA - FINANCIAL BANK')
            ->view('Mail.index');
    }
}
