@extends('layouts.plantilla')
@section('titulo')
  <h2>PORTAL DE LA ESCUELA DE INGENIERIA DE SISTEMAS</h2>
@endsection
@section('contenido')
@if (session('datos'))
      <div id="mensaje">
        <div class="alert alert-primary" role="alert">
            {{session('datos')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span></button>
        </div>
      </div>     
 @endif
<div class="container-fluid negro">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      @foreach ($noticias as $n)
      @if ($n->idnoticia==1)
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$n->idnoticia-1}}" class="active" aria-current="true" aria-label="Slide {{$n->idnoticia-1}}"></button>
      @else
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$n->idnoticia-1}}" aria-label="Slide {{$n->idnoticia-1}}"></button> 
      @endif
          
      @endforeach
   
      
   
    </div>
    <div class="carousel-inner">
      @foreach ($noticias as $a)
      @if ($a->idnoticia==1)
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="archivo/{{$a->imagen}}" class="d-block w-100" alt="{{$a->imagen}}">
        <div class="carousel-caption d-none d-md-block">
          <h2  style="color:#FFFFFF;font-weight: 500" >{{$a->titulo}}</h2>
          <form action="{{route('Noticia.show',$a->idnoticia)}}" method="GET">
            <p  ><button type="submit"  class="btn btn-light" name="noticia"  value="{{$a->idnoticia}}">Ir a la Noticia</button></p>
          </form>
         
         
        </div>
      </div>
      @else
      <div class="carousel-item " data-bs-interval="3000">
        <img src="archivo/{{$a->imagen}}" class="d-block w-100" alt="{{$a->imagen}}">
        <div class="carousel-caption d-none d-md-block">
          <h2 style="color:#FFFFFF;font-weight: 500">{{$a->titulo}}</h2>
          <form action="{{route('Noticia.show',$a->idnoticia)}}" method="GET">
            <p><button type="submit" class="btn btn-light" name="noticia" value="{{$a->idnoticia}}">Ir a la Noticia</button></p>
          </form>
         
        </div>
      </div>
      @endif
      
      @endforeach
     
     
     
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<aside>
<br>
<br>
  <div class="container-fluid fondo">
    <div class="row center">

      <div class="col  col-md-6 col-sm-12">
          <img class="d-block w-100 img-fluid" src="img/persona.jpg" alt="img prespectiva" title="Escuela de Sistemas">
      </div>
  
      <div class="col col-md-6 col-sm-12 ">
        <h2>Si eres nuevo, solicita información ingresando tus datos</h2>
        <div class="row justify-content-center">
        <form action="" >
         <div class="row  ">
          <div class="col">
            <select class="form-select" name="carreras" id=""  aria-label="Default select example">
              
              <option value="" disabled=true selected>Selecciona tu campus</option>
              @foreach ($carreras as $c)
              <option value="{{$c->idcarrera}}">{{$c->carrera}}</option>
              @endforeach
              
             
            </select>
          </div>
         </div>
           
        
         
          <div class="row ">
              <div class="col-6">
                <input type="text" class="form-control" placeholder="Nombres">
              </div>
              <div class="col-6">
                <input type="text" class="form-control" placeholder="Apellidos">
              </div>
           
          </div>
          <div class="row ">
            <div class="col-6">
              <input type="text" class="form-control" placeholder="DNI">
            </div>
            <div class="col-6">
              <input type="text" class="form-control" placeholder="N° Celular">
            </div>           
          </div>
         
          <div class="row">
            <div class="col">
              <input type="email" placeholder="Email" class="form-control "><br>
            </div>
          </div>
        
  
         <input type="submit" class="btn btn-primary " value="Enviar">
          
        </form>
        </div>
      </div>
    
    </div>
  
  </div>
  
  
</aside>    
<br>

<section >
 <div class="container-fluid fondo">
  <div class="row justify-content-center">
    <div class="col col-md-3 col-sm-12 col-xs-12">
      <h2>UBICACIÓN</h2>
      <ul class="list-group list-group-flush info titulo">
        <li class="list-group-item">Campus  Universitario</li>
        <li class="list-group-item">Av. Juan Pablo II S/N</li>
        <li class="list-group-item">Trujillos-Perú</li>
        <li class="list-group-item">Filiales</li>
        <li class="list-group-item">Sede Huamachuco</li>
        <li class="list-group-item">Sede Valle Jequetepeque</li>
      </ul>
   </div>
   <div class="col col-md-3 col-sm-12 col-xs-12">
      <h2>CONTACTO</h2>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Teléfono: (044)-474845</li>
        <li class="list-group-item"><img class="img-fluid" src="img/libro.png" alt="Libro"></li>
      </ul>
      <a href=""><img src="" alt=""></a>
   </div>
   <div class="col col-md-3 col-sm-12 col-xs-12">
      <h2>SOBRE NOSOTROS</h2>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Mapa de sitio</li>
        <li class="list-group-item">Términos de uso</li>
        <li class="list-group-item">Políticas de Privacidad</li>
      </ul>
   </div>
   <div class="col col-md-3 col-sm-12 col-xs-12">
      <h2>SIGUENOS EN</h2>
      <div class="padre">
      <a href="" class="hijo"><img  src="img/twitter.png" alt="twitter" height="60"></a>
      <a href="" class="hijo"><img src="img/facebook.png" alt="facebook" height="60"></a>
      <a href="" class="hijo"><img src="img/youtube.png" alt="youtube" height="60"></a>
      </div>
      
     
   </div>
  


  </div>


 </div>
</section>
<script>
  setTimeout(function(){
    document.querySelector('#mensaje').remove();
  },3000);
  </script> 

@endsection
