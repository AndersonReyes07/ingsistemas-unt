@extends('layouts.plantilla')
@section('titulo')
  <h2>HORARIA DE SEMESTRE ACTUAL SEMESTRE 2021-I</h2>
 
   
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

 <div class="container">

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
       
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            
            <img src="img/1.jpg" class="d-block w-100 img-fluid"  alt="escuela.jpg">
            
          </div>
          <div class="carousel-item">
           <img src="img/2.jpg" class="d-block w-100 img-fluid" alt="">
           
          </div>
          <div class="carousel-item">
            <img src="img/3.png" class="d-block w-100 img-fluid" alt="">
            
           </div>
          
         
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
    
     @foreach ($horarios as $h)
     <h5>HORARIO {{$h->ciclo->ciclo}}</h5>
     <div class="row">
     
           <div class="col">
       
        <img src="{{$h->horarioD}}" class="d-block w-100" alt="ICP">
      </div>
      <div class="col">
        <img src="{{$h->horarioH}}" class="d-block w-100" alt="IC">
      </div>

      

    </div>
    <form action="{{route('pdf')}}" method="GET">
      <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-dark" type="submit" name="horario" value="{{$h->idhorario}}">Descargar Ciclo {{$h->ciclo->ciclo}}</button>
  
      </div>
    </form>
    
    
    <br>
     @endforeach
     


     

    </div>
<script>
  setTimeout(function(){
    document.querySelector('#mensaje').remove();
  },3000);
  </script> 

@endsection
