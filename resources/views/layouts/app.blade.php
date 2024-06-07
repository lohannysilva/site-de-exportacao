<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    @yield('css')
    <style>
      body{
      
      }
      nav{
        height: 100px;
        padding-left: 100px;
        background-color: #f8afff;
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
            <a class="nav-link" href="{{ route('painel') }}">Painel</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('produtos') }}">Produtos</a>
          </li>


        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    @yield('body')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('js')
</body>
</html>
