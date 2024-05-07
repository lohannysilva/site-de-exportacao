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
        dd($request->all());
       try {

        Contato::create([
            // <- nome da coluna no banco / nome do campo no formulario ->
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
