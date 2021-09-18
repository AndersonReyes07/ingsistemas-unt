@extends('layouts.plantillaE')

@section('estilos')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
@endsection
@section('contenido')


  <div class="card-group">
      <div class="card">
        <img src="{{asset('/img/estudiante1.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cronograma Académico</h5>
          <p class="card-text">Estimado estudiante se le hace presente la programación académica para el año 2021.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Universidad Nacional de Trujillo- Ing. Sistemas</small>
        </div>
      </div>
      <div class="card">
        <img src="{{asset('/img/estudiante2.jpeg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Beca Permanencia</h5>
          <p class="card-text"></p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Universidad Nacional de Trujillo- Ing.Sistemas</small>
        </div>
      </div>
      
    </div>





@endsection