@extends('layouts.admin')
@section('titulo')
  <h2>Portal</h2>
@endsection
@section('contenido')

<div class="container-fluid negro">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        
        <img src="{{asset('img/escuela.jpg')}}" class="d-block w-100 img-fluid"  alt="escuela.jpg">
        
      </div>
      <div class="carousel-item">
        <DIV class="ratio ratio-16x9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/JIUIopfnOyo" title="YouTube video" allowfullscreen></iframe>
        </DIV>
        <div class="carousel-caption d-none d-md-block">
          <h5>POSGRADO DE INGENIERIA DE SISTEMAS</h5>
          
        </div>
      </div>
      <div class="carousel-item">
        <center>
          <img src="{{asset('img/escuela-1.jpg')}}" class="img-fluid" width="845"  height="346" alt="CEIS">
          <div class="carousel-caption d-none d-md-block">
            <h5>MAS DETALLES SOBRE INGENIERIA DE SISTEMAS</h5>
        </center>
        
         
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
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
          <img class="d-block w-100 img-fluid" src="{{asset('img/persona.jpg')}}" alt="img prespectiva" title="Escuela de Sistemas">
      </div>
  
      <div class="col col-md-6 col-sm-12 ">
        <h2>Si eres nuevo, solicita información ingresando tus datos</h2>
        <div class="row justify-content-center">
        <form action="" >
         <div class="row  ">
          <div class="col">
            <select class="form-select" name="" id=""  aria-label="Default select example">
              <option value="" disabled=true selected>Selecciona tu campus</option>
              <option value="">Hola</option>
              <option value=""></option>
              <option value=""></option>
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


@endsection
