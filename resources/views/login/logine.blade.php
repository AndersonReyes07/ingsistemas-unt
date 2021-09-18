<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Inicio de Sesión</title>
  </head>
  <body>
    <header>

    </header>
    
    <div class="container-fluid">
       
<div class="container">
    <div class="info">
      <h1>UNT</h1>
    </div>
  </div>
  <div class="form">
    <div class="thumbnail"><img src="{{asset('img/logo.png')}}"/></div>

    <form class="login-form"  method="POST" action="{{route('identificar')}}">
        @csrf
      <input type="text" class="@error('name') is-invalid @enderror" name="name"  placeholder="USUARIO" value="{{old('name')}}"/>
      @error('name')
      <span class="invalid-feedback" role="alert">
          <strong>{{$message}}</strong>
      </span>
      @enderror
      <input type="password" name="password" class="@error('password') is-invalid @enderror"  placeholder="CONTRASEÑA"/>
      @error('password')
      <span class="invalid-feedback" role="alert">
          <strong>{{$message}}</strong>
      </span>
      @enderror
      <button>INICIAR SESIÓN</button>
   
    </form>
  </div>
  

    </div>



    <footer class="negro">
        <figure class="text-center">
            <blockquote class="blockquote">
              <p class="letras">2021-Facultad de Ingenieria. Todos los derechos Reservados</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              UNT <cite title="Source Title">Universidad Nacional de Trujillo</cite>
            </figcaption>
          </figure>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="{{asset('javascript/login.js')}}"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>