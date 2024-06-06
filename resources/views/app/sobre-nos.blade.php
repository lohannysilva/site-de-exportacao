@extends('layouts.app')

@section('title')
    <title>Sobre nós</title>
@endsection

{{-- estes são as sessões do título, css, body e js --}}

@section('css')
<style>
  *{
        margin: 0;
        padding: 0;
     }

body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: "Arial";
       
      
     }
 .card{
         background-color: #fff;
         width: 100px;
         height: 260px;
         border-radius: 12px;
         box-shadow: 4px 4px  12px #0025f5;
         margin-top: 40%;
     
         
        }  
 
   footer {
  text-align: center;
  padding: 10px;
  background-color: rgb(0, 0, 0);
  color: white;
  position: fixed;
  bottom: 0;
  width: 100%;
}

footer p {
  margin: 0;
}

footer a {
  color: white;
}

</style>

@endsection

@section('body')
 
<div class="container">
    <div class="col">
        <div class="card" style="width: 18rem;">
 
            <div class="card-body">
              <h5 class="card-title">bicho de croche </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
    </div>    
</div>



<div class="container">
    <div class="col">
        <div class="card" style="width: 18rem;">
         
            <div class="card-body">
              <h5 class="card-title">bicho de croche adulto</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
    </div>    
</div>




<div class="container">
    <div class="col">
        <div class="card" style="width: 18rem;">
     
            <div class="card-body">
              <h5 class="card-title">bicho de croche criança</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
    </div>    
</div>




<div class="container">
    <div class="col">
       
        
        <div class="card" style="width: 18rem;">
            <img src="bicho.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">CROCHE QUALQUER</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
    </div>    
</div>








<footer>
    <p>Sei lá <br>
    <a href="croche@gmail.com">croche@example.com</a></p>
   
  </footer>


@endsection

@section('js')
    <script>
        console.log("Estou na página de sobre nós");
    </script>
@endsection