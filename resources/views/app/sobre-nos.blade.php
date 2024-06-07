@extends('layouts.app')

@section('title')
    <title>Sobre nós</title>
@endsection

{{-- estes são as sessões do título, css, body e js --}}

@section('css')
<style>
#img1{
    text-align: center;
    margin: auto;
    margin-bottom: 100px;
    width: 600px;
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

<p>O objetivo desse desse trabalho é criar um site</p>

<p>
  <br>Este site foi criado pelas trumas de administrção é informatica de internet
</p>
</div>


<div  class="col">


    <img id="img1"src="{{asset('img/leao.jpg')}}" alt="Imagem 5">
   
 </div>
</div>


@endsection

@section('js')
    <script>
        console.log("Estou na página de sobre nós");
    </script>
@endsection