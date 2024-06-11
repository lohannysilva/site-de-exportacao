@extends('layouts.app')

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
  width: 100%;
  border-radius: 5px;
}

.card h3 {
  margin-top: 15px;
}

.card p {
  color: #666;
}
#img1{
  height: 300px;
  width: 300px;
}
</style>
@endsection

@section('body')
<div class="conteudo">
    <div class="card">
        <img id="img1"src="{{ asset('img/batman.jpg') }}" alt="Imagem 1">
        <h3>Batman</h3>
        <p>R$ 80,00</p>
        <a href="{{ route('produtos.show', ['produto' => 1]) }}" class="btn btn-dark">Ver detalhes</a>
    </div>
    <div class="card">
        <img id="img1"src="{{asset('img/feia.jpg')}}" alt="Imagem 2">
        <h3>Marca-páginas</h3>
        <p>R$ 30,00</p>
        <a href="{{ route('produtos.show', ['produto' => 2]) }}" class="btn btn-dark">Ver detalhes</a>
    </div>
    <div class="card">
        <img id="img1"src="{{asset('img/boneco.jpg')}}" alt="Imagem 3">
        <h3>Branca de Neve</h3>
        <p>R$ 120,00</p>
        <a href="{{ route('produtos.show', ['produto' => 3]) }}" class="btn btn-dark">Ver detalhes</a>
    </div>
    <div class="card">
        <img id="img1"src="{{asset('img/porco.jpg')}}" alt="Imagem 4">
        <h3>Porquinho</h3>
        <p>R$ 50,00</p>
        <a href="{{ route('produtos.show', ['produto' => 4]) }}" class="btn btn-dark">Ver detalhes</a>
    </div>
    <div class="card">
        <img id="img1"src="{{asset('img/boi.jpg')}}" alt="Imagem 5">
        <h3>Vaquinha</h3>
        <p>R$ 80,00</p>
        <a href="{{ route('produtos.show', ['produto' => 5]) }}" class="btn btn-dark">Ver detalhes</a>
    </div>
  
    <div class="card">
      <img id="img1"src="{{asset('img/dino.jpg')}}" alt="Imagem 5">
      <h3>Dinossauro</h3>
      <p>R$ 50,00</p>
      <a href="{{ route('produtos.show', ['produto' => 6]) }}" class="btn btn-dark">Ver detalhes</a>
  </div>
  <div class="card">
    <img id="img1"src="{{asset('img/hello.jpg')}}" alt="Imagem 5">
    <h3>Hello Kitty</h3>
    <p>R$ 50,00</p>
    <a href="{{ route('produtos.show', ['produto' => 7]) }}" class="btn btn-dark">Ver detalhes</a>
  </div>
  <div class="card">
    <img id="img1"src="{{asset('img/coisa.jpg')}}" alt="Imagem 5">
    <h3>Água-viva</h3>
    <p>R$ 120,00</p>
    <a href="{{ route('produtos.show', ['produto' => 8]) }}" class="btn btn-dark">Ver detalhes</a>
  </div>
  <div class="card">
    <img id="img1"src="{{asset('img/homem-de-ferro.jpg')}}" alt="Imagem 5">
    <h3>Tonny Stark</h3>
    <p>R$ 120,00</p>
    <a href="{{ route('produtos.show', ['produto' => 9]) }}" class="btn btn-dark">Ver detalhes</a>
  </div>

  </div>
   
@endsection
