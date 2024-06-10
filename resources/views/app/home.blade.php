@extends('layouts.app')



{{-- estes são as sessões do título, css, body e js --}}

@section('css')
<style>

.conteudo{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  padding: 20px;
  padding-top: 50px;
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
    h3{
        text-align: center;
        margin-top: 25px; 
    }
    h2{
        text-align: center;
        margin-top: 20px; 
        font-family: Georgia, 'Times New Roman', Times, serif;
    }


    #banner{
        width: 100%;
        height: 350px;
        margin-bottom: 2%;
       
    }

</style>

@endsection

@section('body')
<img id="banner"src="{{ asset('img/banner.png') }}" alt="Imagem 1">

<h2><b>Linhas utilizadas</b></h2>
<div class="conteudo">
    
    <div class="card">
        <img id="img1"src="{{ asset('img/soft.png') }}" alt="Imagem 1">
        <h3>Soft</h3>
        <p>55% acrílico e 45% algodão</p>
      
    </div>
    <div class="card">
        <img id="img1"src="{{asset('img/ballon.jpg')}}" alt="Imagem 2">
        <h3>Balloon Amigo</h3>
        <p>42% Acrílico e 58% Algodão</p>

    </div>
    <div class="card">
        <img id="img1"src="{{asset('img/glow.png')}}" alt="Imagem 3">
        <h3>Amigurumi Glow</h3>
        <p>100% poliéster</p>
        
    </div>
</div>
<h2><b>Agulhas utilizadas</b></h2>
<div class="conteudo">
   
    <div class="card">
        <img id="img1"src="{{asset('img/crocheagulha.png')}}" alt="Imagem 4">
        <h3>Agulha Gancho</h3>
        <p>6,0mm</p>

    </div>
    <div class="card">
        <img id="img1"src="{{asset('img/trapaceira.png')}}" alt="Imagem 5">
        <h3>Agulha Tapeçaria</h3>
        <p>3,5mm</p>
      
    </div>
  
    <div class="card">
      <img id="img1"src="{{asset('img/tunisiano.png')}}" alt="Imagem 5">
      <h3>Agulha Tunisiana</h3>
      <p>9,0mm</p>
      
  </div>
</div>
 
   
  </div>

  </div>
@endsection

@section('js')
    <script>
        console.log("Sejam bem-vindos kkk")</script>
@endsection