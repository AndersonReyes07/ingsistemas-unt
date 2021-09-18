
@extends('layouts.plantillaE')
@section('estilos')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{asset('/css/styles.css')}}">
@endsection

@section('contenido')
<body>
    

    <div class="container" id="advanced-search-form">
        
        <form action="{{route('sesion.update',$alumnoss->codigo)}}" method="post" >
            @csrf
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="first-name">Código</label>
                <input type="text"value="{{$alumnoss->codigo}}" class="form-control" placeholder="Código" id="first-name" readonly>
            </div>
            <div class="form-group">
                <label for="last-name">Nombres</label>
                <input type="text" value="{{$alumnoss->nombres}}"class="form-control" placeholder="Nombres" name="nombres"   id="last-name">
            </div>
            <div class="form-group">
                <label for="country">Apellidos</label>
                <input type="text" value="{{$alumnoss->apellidos}}"class="form-control" placeholder="Apellidos" name="apellidos" id="country">
            </div>
            <div class="form-group">
                <label for="number">Teléfono</label>
                <input type="text"value="{{$alumnoss->telefono}}" class="form-control" placeholder="Teléfono" name="telefono"id="number">
            </div>
            <div class="form-group">
                <label for="age">Usuario</label>
                <input type="text" value="{{$alumnoss->user}}"class="form-control" placeholder="Usuario"name="user" id="age" readonly>
            </div>
            {{-- <div class="form-group">
                <label for="email">Contraseña</label>
                <input type="password"value="*****" class="form-control" placeholder="Contraseña" name="password" id="email">
            </div> --}}
            {{-- <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" placeholder="Category" id="category">
            </div>
            <div class="form-group">
                <label for="education">Education</label>
                <input type="text" class="form-control" placeholder="Education" id="education">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <div class="radio">
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Male</label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Female</label>
                </div>
            </div> --}}
            {{-- <div class="clearfix"></div> --}}
            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </form>
    </div>


</body>

 
@endsection