@extends('layouts.app')

@section('title')
    <title>Sobre nós</title>
@endsection

{{-- estes são as sessões do título, css, body e js --}}

@section('css')

@endsection

@section('body')
    <div>
        <p>Estou na página de sobre nós</p>
    </div>
@endsection

@section('js')
    <script>
        console.log("Estou na página de sobre nós");
    </script>
@endsection