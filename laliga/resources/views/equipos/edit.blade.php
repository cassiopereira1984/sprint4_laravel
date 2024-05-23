@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Equipo</h2>
        <form method="POST" action="{{ route('equipos.update', $equipo->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre del Equipo:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $equipo->nombre }}">
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" class="form-control" value="{{ $equipo->ciudad }}">
            </div>
            <div class="form-group">
                <label for="fundacion">Año de Fundación:</label>
                <input type="text" id="fundacion" name="fundacion" class="form-control" value="{{ $equipo->fundacion }}">
            </div>
            <div class="form-group">
                <label for="estadio">Estadio:</label>
                <input type="text" id="estadio" name="estadio" class="form-control" value="{{ $equipo->estadio }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Equipo</button>
        </form>
    </div>
@endsection
