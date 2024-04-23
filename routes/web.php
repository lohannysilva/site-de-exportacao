<?php

use App\Http\Controllers\ContatosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contato',[ContatosController::class,'contato']);
Route::post('contato',[ContatosController::class,'enviarFormulario']);