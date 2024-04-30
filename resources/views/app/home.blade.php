@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

{{-- estes são as sessões do título, css, body e js --}}

@section('css')

@endsection

@section('body')
    <div>
        <p class="bg-primary
        ">Estou na página de home</p>
    </div>
@endsection

@section('js')
    <script>
        console.log("Estou na página de home");
    </script>
@endsection