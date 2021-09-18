@extends('layouts.admin')
@section('titulo')
  <h2>Docentes</h2>
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
        <th scope="col">Docente</th>
        <th scope="col">Editar Docente</th>
        <th scope="col">Eliminar Docente</th>
       
      </tr>
    </thead>
    <tbody>     
     
          @foreach ($docentes as $t)
            <tr>
              <th scope="row">{{$t->nombre}}, {{$t->apellidos}}</th>
              <td><img src="{{$t->imagen}}" alt="" width="60" height="60"> </td>
              <td>
                  <form action="{{route('Admin.edit',$t->iddocente)}}" method="GET">
                    <button type="submit" class="btn btn-warning">Editar Docente</button>
                  </form>
              </td>
              <td>
                  <form action="{{route('Admin.destroy',$t->iddocente)}}" method="POST">
                   @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Eliminar docente</button>
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



