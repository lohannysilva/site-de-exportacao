<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    @yield('css')
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
      nav{
        height: 100px;
        padding-left: 100px;
        background-color: #f8afff; 
      }

      footer {
            background-color: #9c2da7;
            color: #fff;
            padding: 40px 20px;
            width: 100%;
            text-align: center;
            bottom: 0;
            margin-top:100px 
        }


    </style>
</head>
<body>
  {{-- MENU --}}
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home')}}">Amiguchê</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contatos') }}">Contatos</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('sobre-nos') }}">Sobre nós</a>
        </li>
       

          <li class="nav-item">
            <a class="nav-link" href="{{ route('produtos') }}">Produtos</a>
          </li>


        </ul>
      
      </div>
    </div>
  </nav>

 
    @yield('body')

    <footer>
      <div class="container">
          <div class="section">
              <h3>Sobre Nós</h3>
              <p>No Amiguchê não se trata apenas de criar belas peças, mas também de compartilhar conhecimento, inspirar outros e criar uma comunidade de entusiastas do crochê. Estamos aqui para ajudá-lo em sua própria jornada de crochê, seja você um iniciante curioso ou um entusiasta experiente.</p>
          </div>
          <div class="section">
              <h3>Contato</h3>
              <p>Endereço: Rua Guarani 233 </p>
              <p>Telefone: (11) 94002-8922</p>
              <p>Email: Amiguche@gmail.com</p>
          </div>
          <div class="section">
             
          </div>
      </div>
      <div style="text-align: center;">
          <p>&copy; 2024 AJK. Todos os direitos reservados.</p>
      </div>
  </footer>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('js')
</body>
</html>
