<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\SobrenosController;
use Illuminate\Support\Facades\Route;

Route::get('/contato', [ContatosController::class, 'contatoPage'])->name('contatos');

Route::post('/contato', [ContatosController::class, 'enviarFormulario'])->name('contatos.submit');

Route::get('/sobre-nos', [SobrenosController::class, 'sobrenosPage'])->name('sobre-nos');

Route::get('/', [HomeController::class, 'homePage'])->name('home');

Route::get('/painel', [PainelController::class, 'painelPage'])->name('painel');

Route::resource('categorias', CategoriaController::class);