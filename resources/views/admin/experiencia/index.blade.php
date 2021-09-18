@extends('layouts.admin')
@section('titulo')
  <h2>Experiencias de los Docentes</h2>
  <form action="{{route('Experiencia.create')}}" method="GET">
    <button type="submit" class="btn btn-primary">Registrar Experiencias de los Docentes</button>

  </form>
 @endsection


@section('contenido')
@if (session('eliminar'))
      <div id="mensaje">
        <div class="alert alert-danger" role="alert">
            {{session('eliminar')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span></button>
        </div>
      </div>     
 @endif

 @if (session('datos'))
      <div id="mensaje">
        <div class="alert alert-success" role="alert">
            {{session('datos')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span></button>
        </div>
      </div>     
 @endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nombres y Apellidos</th>      
        <th scope="col" >Experiencia</th>
        <th scope="col">Editar Experiencia</th>
        <th scope="col">Eliminar Experiencia</th>
       
      </tr>
    </thead>
    <tbody>     
     
          @foreach ($experiencias as $e)
            <tr>
              <th scope="row">{{$e->docente->nombre}}, {{$e->docente->apellidos}}</th>
             
              <td>{{$e->experiencia}}</td>
              <td>
                  <form action="{{route('Experiencia.edit',$e->idexperiencia)}}" method="GET">
                    <button type="submit" class="btn btn-warning">Editar Experiencia</button>
                  </form>
              </td>
              <td>
                  <form action="{{route('Experiencia.destroy',$e->idexperiencia)}}" method="POST">
                   @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Eliminar Experiencia</button>
                  </form>
              </td>
            </tr>
          @endforeach
        
     
          
    </tbody>
  </table>
  <script>
    setTimeout(function(){
      document.querySelector('#mensaje').remove();
    },3000);
    </script> 
  
@endsection



