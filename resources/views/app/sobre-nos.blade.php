@extends('layouts.app')

@section('title')
    <title>Sobre nós</title>
@endsection

{{-- estes são as sessões do título, css, body e js --}}

@section('css')
<style>

.conteudo{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  padding: 20px;
  padding-top: 200px;
}

.card {
  background-color: #f4f4f4;
  border-radius: 5px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card img {
  max-width: 100%;
  border-radius: 5px;
}

.card h3 {
  margin-top: 15px;
}

.card p {
  color: #666;
}
</style>

@endsection

@section('body')

<div class="conteudo">
  <div class="card">
      <img src="https://via.placeholder.com/150" alt="Imagem 1">
      <h3>Card 1</h3>
      <p>Conteúdo do Card 1.</p>
  </div>
  <div class="card">
      <img src="https://via.placeholder.com/150" alt="Imagem 2">
      <h3>Card 2</h3>
      <p>Conteúdo do Card 2.</p>
  </div>
  <div class="card">
      <img src="https://via.placeholder.com/150" alt="Imagem 3">
      <h3>Card 3</h3>
      <p>Conteúdo do Card 3.</p>
  </div>
  <div class="card">
      <img src="https://via.placeholder.com/150" alt="Imagem 4">
      <h3>Card 4</h3>
      <p>Conteúdo do Card 4.</p>
  </div>
  <div class="card">
      <img src="https://via.placeholder.com/150" alt="Imagem 5">
      <h3>Card 5</h3>
      <p>Conteúdo do Card 5.</p>
  </div>
</div>
 



@endsection

@section('js')
    <script>
        console.log("Estou na página de sobre nós");
    </script>
@endsection