@extends('layouts.admin')
@section('titulo')
  <h2>Administrador</h2>
@endsection
@section('contenido')
<h1>Editando datos de {{$docente->nombre}} {{$docente->apellidos}} </h1>
<input type="hidden" name="id" value="{{$docente->iddocente}}">
<div class="row">
 <form action="{{route('Admin.update',$docente->iddocente)}}" method="POST">

    @csrf
    @method('PUT')
     <div class="row">
         <div class="col">
                    <label for="">Carreras</label>
                <select name="carrera" id="" class="form-control">
                    @foreach ($carreras as $item)
                    <option value="{{$item->idcarrera}}">{{$item->carrera}}</option>
                    @endforeach
                   
                </select>
         </div>
         <div class="col">
            <label for="">Grados</label>
            <select name="grado" id="" class="form-control">
                @foreach ($grados as $item)
                <option value="{{$item->idgrado}}" >{{$item->grado}}</option>
                @endforeach
               
            </select>
         </div>
        
         <div class="col">
            <label for="">Año de culminacion </label>
            <input type="text" name="ano" placeholder="Escribir año" class="form-control" required>
      
         </div>
        
     </div>

     <div class="row" >
         <div class="col">
            <label for="">Nombres</label>
            <input type="text" name="nombre" class="form-control" required placeholder="Escribir Nombres">
         </div>
         <div class="col">
            <label for="">Apellidos</label>
            <input type="text" name="apellido" class="form-control" required placeholder="Escribir Apellidos"> 
        </div>
        
     </div>

     <div class="row">
        <div class="col">
            <div class="mx-auto" style="width: 200px;">
                <button type="submit" class="btn btn-primary">Editar</button>
             </div>
             
        </div>

        <div class="col">
            <div class="mx-auto" style="width: 200px;">
                <a href="{{route('cancelar')}}" class="btn btn-danger">Cancelar</a>
             </div>
        </div>

     </div>
    
 </form>

</div>





{{-- <section >
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
</section> --}}


@endsection



