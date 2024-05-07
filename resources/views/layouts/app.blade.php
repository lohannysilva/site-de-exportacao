<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @yield('css')
</head>
<body>
  {{-- MENU --}}
    <nav class="navbar navbar-expand-lg bg-danger-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home')}}">PAQUITA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('contatos')}}">Contatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('sobre-nos') }}">Sobre nós</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('painel') }}">Painel</a>
          </li>
    </div>
  </div>
</nav>
    {{-- BODY --}}
    <div class="container-fluid"></div>
    @yield('body')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('js')
</body>
</html>
