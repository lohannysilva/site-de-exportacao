@extends('layouts.app')

@section('title')
    <title>Sobre nós</title>
@endsection

{{-- estes são as sessões do título, css, body e js --}}

@section('css')
<style>

footer {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
}

footer p {
    margin-bottom: 10px;
}

</style>

@endsection

@section('body')
            <footer>
                <p>Copyright © 2024 - Todos os direitos reservados</p>
                <p>Entre em contato pelo E-mail:croche@gmail.com</p>
                <div>
                    <p>Siga-nos nas redes sociais:</p>
                    <ul>
                   
                    </ul>
                </div>
            </footer>

@endsection

@section('js')
    <script>
        console.log("Estou na página de sobre nós");
    </script>
@endsection