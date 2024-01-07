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
            'tipo_transacao' => $request['tipo_transacao'] ?? 'Tipo Transaçâo',
            'valor_transacao' => $request['valor_transacao'] ?? 'Valor Transaçâo',
            'data_transacao' => $request['data_transacao'] ?? 'Data Transaçâo',
            'saldo_disponivel' => $request['saldo_disponivel'] ?? 'Saldo Disponível',
        ];

        Mail::to($dados['email'])->send(new envioNotificacao($dados));
    }
}
