<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Exception;
use Illuminate\Http\Request;

class ContatosController extends Controller
{
    /**
     * Renderiza a página de contato
     * 
     * @return View
    */
    public function contatoPage()
    {
        return view('app.contatos');
    }

    /**
     * 
    */
    public function enviarFormulario(Request $request)
    {
       try {
            Contato::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'assunto' => $request->assunto,
            'mensagem' => $request->mensagem
            ]);

            return back()->withSuccess('Formulário enviado');
        } catch (Exception $exception) {
            return back()->withErrors($exception->getMessage());
       }
    }
}
