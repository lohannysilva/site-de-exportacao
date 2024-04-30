@extends('layouts.app')

@section('title')
    <title>Painel</title>
@endsection

{{-- estes são as sessões do título, css, body e js --}}

@section('css')

@endsection

@section('body')
    <div>
        <p class="bg-primary
        ">Estou na página de painel</p>
    </div>
@endsection

@section('js')
    <script>
        console.log("Estou na página de painel");
    </script>
@endsection