@extends('layouts.plantilla')
@section('titulo')
  <h2>PLANA DE DOCENTES</h2>
@endsection



@section('contenido')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nombres y Apellidos</th>
        <th scope="col">Docente</th>
        <th scope="col">Grados Academicos</th>
        <th scope="col">Experiencia Laboral</th>
      </tr>
    </thead>
    <tbody>     
     
          @foreach ($docentes as $d)
            <tr>
              <th scope="row">{{$d->nombre}}, {{$d->apellidos}}</th>
              <td><img src="{{$d->imagen}}" alt="" width="60" height="60"> </td>
              <td>
                  <ul>
                    @foreach ($d->titulos as $t)
                   
                      <li>{{$t->grado->grado}}, {{$t->carrera->carrera}}. {{$t->ano}} </li>
                    
                    @endforeach
                  </ul> 
              </td> 
              <td>
                <ul>
                  @foreach ($d->experiencias as $e)        
                  <li> {{$e->experiencia}} {{$e->ano}} </li>
                    @endforeach

                </ul>
               
              </td>
            </tr>
          @endforeach
        
     
          
    </tbody>
  </table>
@endsection



