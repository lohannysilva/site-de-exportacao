@extends('layouts.app')

@section('css')
<style>
  body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            max-width: 1200px;
            text-align: center;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        main {
            padding: 20px 0;
        }

        .produto {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .produto img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .produto h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .preco {
            font-size: 18px;
            color: #009688;
            margin-bottom: 10px;
        }

        .descricao {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .comprar-btn {
            display: inline-block;
            background-color: #000000;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            margin: 0;
        }
        
        #img1{
            height: 250px;
        }
    </style>
@endsection

@section('body')
  <div class="container">
    <img id="img1" src="{{ $produto->image }}" alt="ursinho">
    <h2>{{ $produto->nome }}</h2>
    <p class="preco">R$ {{ $produto->preco }}</p>
    <p class="tamanho">{{ $produto->tamanho }}</p>
    <p class="descricao">{{ $produto->descricao }}</p>
    <a href="finalizarcompra.html" class="comprar-btn">Comprar</a>
  </div>
@endsection
