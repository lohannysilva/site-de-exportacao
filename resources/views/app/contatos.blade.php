@extends('layouts.app')

@section('title')
    <title>Contatos</title>
@endsection

{{-- estes são as sessões do título, css, body e js --}}

@section('css')

@endsection

@section('body')
<div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route ('contatos.submit')}}" method="post" class="mt-4 mb-4">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="name" class="form-control">
              </div>
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="nome@exemplo.com">
              </div>
            <div class="mb-3">
                <label class="form-label">Assunto</label>
                <select name="subject" class="form-control">
                    <option value="">Selecione uma opção</option>
                    <option value="vendas">Vendas</option>
                    <option value="entregas">Entregas</option>
                    <option value="s & r">Sugestões e reclamações</option>
                </select>
            </div>
              <div class="mb-3">
                <label class="form-label">Mensagem</label>
                <textarea class="form-control" rows="3" name="message"></textarea>
              </div>
              <button type="submit" class="form-control btn btn-primary bg-black">Enviar</button>
        </form>
    </div>
    <div class="col"></div>
</div>
@endsection

@section('js')
    <script>
        console.log("Estou na página de contatos");
    </script>
@endsection