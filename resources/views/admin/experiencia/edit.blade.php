@extends('layouts.admin')
@section('titulo')
  <h2>Administrador</h2>
@endsection
@section('contenido')
<h1>Editando Experiencia de {{$experiencia->docente->nombre}}  {{$experiencia->docente->apellidos}}</h1>
<div class="row">
 <form action="{{route('Experiencia.update',$experiencia->idexperiencia)}}" method="POST">
    @method('PUT')
    @csrf
     <div class="row">
         <div class="col">
                    <label for="">Docente</label>
                <select name="docente" id="" class="form-control">
                    @foreach ($docentes as $item)
                    <option value="{{$item->iddocente}}">{{$item->nombre}} {{$item->apellidos}}</option>
                    @endforeach
                   
                </select>
         </div>
         
        
         
     </div>

   

     <div class="row">
        <div class="col">
            <label for="">Nueva Experiencia </label>
            <input type="text" name="experiencia" placeholder="Escribir experiencia del docente" class="form-control" required>
        </div>

        <div class="col">
            <label for="">Año </label>
            <input type="number" name="ano" class="form-control" required placeholder="Escribir Años"> 
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
