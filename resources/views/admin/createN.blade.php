@extends('layouts.admin')
@section('titulo')
  <h2>Administrador</h2>
@endsection
@section('contenido')
<h1>Registro de Noticias</h1>
<div class="row">
 <form action="{{route('Noticia.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf
     
    <div class="row">
        <div class="col">
            <label for="">Año de la Noticia</label>
        <input type="number" name="ano" class="form-control @error('ano') is-invalid @enderror"  placeholder="Escribir Año">
        @error('ano')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        </div>
        <div class="col">
            <label for="">Mes de la Noticia</label>
        <input type="number" name="mes" class="form-control @error('mes') is-invalid @enderror" placeholder="Escribir Mes">
        @error('mes')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        </div>
        <div class="col">
            <label for="">Dia de la Noticia</label>
        <input type="number" name="dia" class="form-control @error('dia') is-invalid @enderror" placeholder="Escribir Dia">
        @error('dia')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        </div>
        

    </div>
     <div class="row" >
         <div class="col">
            <label for="">Titulo de la Noticia</label>
            <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror"  placeholder="Escribir Titulo">
            @error('titulo')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
         </div>
         
         <br>
       
         
        
     </div>
     <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Informacion de la noticia</label>
                <textarea name="contenido" class="form-control @error('contenido') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('contenido')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
              </div>
         </div>
     </div>
     <div class="row">
        <div class="col">
            <label for="">Subir imagen de la Noticia</label>
            <input class="form-control" type="file" name="archivo" class="form-control-file @error('archivo') is-invalid @enderror" > 
            @error('archivo')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
     </div>

    
     <div class="row">
        <div class="col">
            <div class="mx-auto" style="width: 200px;">
                <button type="submit" class="btn btn-primary">Registrar</button>
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


@endsection
