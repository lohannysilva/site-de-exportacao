<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return view('app.produtos', ['produtos' => $produtos]);
    }

    public function show(Produto $produto)
    {
        return view('app.produto', ['produto' => $produto]);
    }
}
