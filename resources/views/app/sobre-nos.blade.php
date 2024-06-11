@extends('layouts.app')

@section('title')
    <title>Sobre nós</title>
@endsection

{{-- estes são as sessões do título, css, body e js --}}

@section('css')
<style>
#img1{
    text-align: center;

    margin-bottom: 100px;
    width: 400px;
    height: 300px;
    margin-left: 100px;
    
}

p{
     text-align: justify;
     margin-top: 30px;
     padding: absolute;
     margin-left: 12%;
     font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
 }


 .tit1{
  text-align: center;
  margin: auto;
  margin-top: 70px;
  font-family: Georgia, 'Times New Roman', Times, serif;
  font-size: 170%;
  margin-bottom: 100px;
}

#line{
    margin:auto;
    text-align: center;
  }
</style>

@endsection

@section('body')


<Div id="line"class="row">
            
    <div  class="col">
    <p class="tit1"><b>SOBRE NÓS</b></p>
    </div>
</div>  
<div class="row">
    <div class="col">

<p>Bem-vindo ao Amiguchê, onde transformamos fios em arte!</p>

<p>
    Somos apaixonados pelo mundo do crochê e pela beleza que podemos criar com um simples gancho e um novelo de fios. Aqui, cada ponto é uma história, e cada peça é uma expressão única de criatividade e habilidade.
    Nossa jornada no crochê começou com o desejo de compartilhar nossa paixão com o mundo. Ao longo dos anos, aprimoramos nossas técnicas, exploramos padrões e nos maravilhamos com as infinitas possibilidades que essa arte oferece
</p>
</div>


<div  class="col">


    <img id="img1"src="{{asset('img/groche.jpg')}}" alt="Imagem 5">
   
 </div>
</div>


@endsection

@section('js')
    <script>
        console.log("Estou na página de sobre nós");
    </script>
@endsection