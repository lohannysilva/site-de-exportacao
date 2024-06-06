@extends('layouts.app')

@section('title')
    <title>Contatos</title>
@endsection



@section('css')
<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.row {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}


.col {
    flex: 1;
}


form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

/* Estilização dos elementos do formulário */
.form-label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
}

.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    box-sizing: border-box;
}

textarea.form-control {
    resize: vertical;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary {
    background-color: #007bff;
    color: #ffffff;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn.bg-black {
    background-color: #000000;
}


.mt-4 {
    margin-top: 1.5rem !important;
}

.mb-4 {
    margin-bottom: 1.5rem !important;
}

</style>
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
<div class="conteudo">
</div>



@endsection

@section('js')
    <script>
        console.log("Estou na página de contatos");
    </script>
@endsection