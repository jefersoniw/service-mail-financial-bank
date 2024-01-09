<?php

namespace App\Http\Controllers;

use App\Mail\envioNotificacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnvioEmailController extends Controller
{
    public function index(Request $request)
    {
        $dados = [
            'email' => 'jeferson_chagas25@hotmail.com',
            'tipo_transacao' => $request['retorno']['transacao']['tipo_transacao']['desc_transacao'] ?? 'Tipo Transaçâo',
            'valor_transacao' => $request['retorno']['transacao']['valor_transacao'] ?? 'Valor Transaçâo',
            'data_transacao' => $request['retorno']['transacao']['created_at'] ?? 'Data Transaçâo',
            'saldo_disponivel' => $request['retorno']['saldo_disponivel'] ?? 'Saldo Disponível',
            'mensagem' => $request['retorno']['msg'] ?? 'Mensagem',
        ];

        Mail::to($dados['email'])->send(new envioNotificacao($dados));
    }
}
