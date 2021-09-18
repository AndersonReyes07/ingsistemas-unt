@extends('layouts.plantilla')
@section('titulo')
  <h2>PLAN DE ESTUDIOS 2018</h2>
  <a class="btn btn-dark" target="_blank" href="https://docs.google.com/document/d/1N63ybifS88Op1qnE9-OzJh021ChOKLwl/edit?usp=sharing&ouid=104444908584555651258&rtpof=true&sd=true" role="button">Descargar Plan de Estudios</a>
 
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
  <div class="table-responsive">
    @foreach ($ciclos as $c)
    <h1>Ciclos {{$c->ciclo}}</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Curso</th>
          <th scope="col">Creditos</th> 
          <th scope="col">Condicion</th>     
        </tr>
      </thead>
      <tbody>
        @foreach ($c->cursos as $d)
        <tr>
          <th scope="row">{{$d->idcurso}}</th>
          <td>{{$d->curso}}</td>
          <td>{{$d->credito}}</td>
          <td>{{$d->condicion}}</td>
        </tr>
        @endforeach
       
      
      </tbody>
    </table> 
    @endforeach
    
  
  </div>
 
</div>
<script>
  setTimeout(function(){
    document.querySelector('#mensaje').remove();
  },3000);
  </script> 

@endsection
