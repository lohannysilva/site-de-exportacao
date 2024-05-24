@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

{{-- estes são as sessões do título, css, body e js --}}

@section('css')
<style>
    *{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	box-sizing: border-box;
}

.conteudo{
	width: 100%;
	height: 50vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

.conteudo h1{
	font-size: 15vw;
	text-transform: uppercase;
}

footer{
	width: 100%;
	min-height: 310px;
	background: rgb(79, 73, 79);
	display: flex;
    position: fixed;
	bottom: 0;
	
	
}

footer .boxs{
 width: 320px;
 min-width: 150px;
 padding: 20px;
}

footer .boxs:nth-child(4){
	width: 400px;

}

.boxs h2{
	color: #fff;
	margin-bottom: 20px;
}

.boxs ul li {
	margin:10px 0px;
	list-style: none;
}

.boxs ul li a {
	color: #000000;
	text-decoration: none;
}

.boxs ul li a:hover{
	color: #fff;
}

.boxs p {
	color: #000000;
	text-align: justify;
}

.footer{
	width: 100%;
	height: 70px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	background: #7a0b6b;
	padding: 0px 20px ;
}

.footer h2 {
	color: #fff;
}



@media(max-width:950px){
	footer{
		flex-direction: column;
	}
	footer .boxs{
		width: 320px;
		text-align: center;
	   }
	   footer .boxs:nth-child(4){
		width: 100%;
	
	}
}

</style>
@endsection

@section('body')
<div class="conteudo">

</div>


<!-- Rodape-->

<footer>
<div class="boxs">
  <h2>Inicio</h2>
  <ul>
 <li><a href="#">Home</a></li>
 <li><a href="#">Produtos</a></li>
  </ul>
</div>


<div class="boxs">
  <h2>Informaçoes</h2>
  <ul>
    <li><a href="#">Contatos</a></li>
    <li><a href="#">Email</a></li>
  </ul>
</div>


<div class="boxs">
  <h2>Suporte</h2>
  <ul>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Telefone</a></li>
  </ul>
</div>



<div class="boxs">
  <h2>Sobre nos</h2>
  <p>
  Objetivo desse site e criar um produto de croche para vendas na feira de ciencias 
  </p>
</div>
</footer>
</div>

@endsection

@section('js')
    <script>
        console.log("Sejam bem-vindos kkk")</script>
@endsection