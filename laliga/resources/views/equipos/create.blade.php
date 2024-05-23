@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Nuevo Equipo</h2>
        <form method="POST" action="{{ route('equipos.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Equipo:</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="logo">logo:</label>
                <input type="file" id="logo" name="logo" class="form-control">
            </div>
            <div class="form-group">
                <label for="ciudad">ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" class="form-control">
            </div>
            <div class="form-group">
                <label for="fundacion">Año de Fundación:</label>
                <input type="text" id="fundacion" name="fundacion" class="form-control">
            </div>
            <div class="form-group">
                <label for="estadio">Estadio:</label>
                <input type="text" id="estadio" name="estadio" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Crear Equipo</button>
        </form>
    </div>
@endsection
