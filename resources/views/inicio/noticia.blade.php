@extends('layouts.plantilla')
@section('titulo')
  <h1>{{$noticia->titulo}}</h1>
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
 <h3>Fecha: {{$noticia->fecha}}</h3>  
<div class="container-fluid negro">

      <div class="clearfix">
        <img src="{{asset('archivo/'.$noticia->imagen)}}" class="col-md-6 float-md-end mb-3 ms-md-3 alt="{{$noticia->imagen}}"> 
            <p>{{$noticia->contenido}}</p> 
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
        <li class="list-group-item"><img class="img-fluid" src="{{asset('img/libro.png')}}" alt="Libro"></li>
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
      <a href="" class="hijo"><img  src="{{asset('img/twitter.png')}}" alt="twitter" height="60"></a>
      <a href="" class="hijo"><img src="{{asset('img/facebook.png')}}" alt="facebook" height="60"></a>
      <a href="" class="hijo"><img src="{{asset('img/youtube.png')}}" alt="youtube" height="60"></a>
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
