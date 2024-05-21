<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * lista os registros.
     */
    public function index()
    {
        $categorias = Categoria::all();

        return view('admin.categorias.index', ['categorias' => $categorias]);

    }

    /**
     * salva um novo registro.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * exibir um registro.
     */
    public function show(Categoria $categoria)
    {
        return view('app.categorias', $categoria);
    }

    /**
     * atualiza.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * destrói.
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
