@extends('layouts.plantilla')
@section('titulo')
  <h2>MALLA CURRICULAR 2018</h2>
  <a class="btn btn-dark" target="_blank" href=" https://docs.google.com/document/d/1nb9yF4hNkBbeLYKrQ5QyXkMgx7uEYMX3/edit?usp=sharing&ouid=104444908584555651258&rtpof=true&sd=true
  " role="button">Descargar Malla Curricular</a>

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
  <img class="img-fluid" src="img/malla.jpg" alt="">
</div>
<script>
  setTimeout(function(){
    document.querySelector('#mensaje').remove();
  },3000);
  </script> 

@endsection
