<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> @yield('pageTitle') - Controle de Protocolos</title>
  </head>
  <body>

    <!-- Links - menu lateral //-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #563D7C;">

      <span class="navbar-brand mb-0 h1">Controle de Protocolos</span>

      <ul class="navbar-nav">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          @if (Auth::guest())
            <li class="nav-item"><a href="/login" class="nav-link">Login</a></li> 
          @else
            <li class="nav-item"><a href="{{route('admin.requets')}}" class="nav-link">Listar Requerimentos</a></li>
            <li class="nav-item"><a href="#" class="nav-link">{{Auth::user()->name}}</a></li>
            <li class="nav-item"><a href="{{route('site.login.sair')}}" class="nav-link">Sair</a></li>            
          @endif         
          <li class="nav-item"><a href="/sobre" class="nav-link">Sobre</a></li>
      </ul>
    </nav>

    <!-- Conteúdo -- parte central //-->
    @yield('conteudo')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>