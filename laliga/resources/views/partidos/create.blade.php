@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Nuevo Partido</h2>
        <form method="POST" action="{{ route('partidos.store') }}">
            @csrf
            <div class="form-group">
                <label for="equipo_local">Equipo Local:</label>
                <select name="equipo_local_id" id="equipo_local" class="form-control">
                    @foreach ($equipos as $equipo)
                        <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="equipo_visitante">Equipo visitante:</label>
                <select name="equipo_visitante_id" id="equipo_visitante" class="form-control">
                    @foreach ($equipos as $equipo)
                        <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="datetime-local" id="fecha" name="fecha" class="form-control">
            </div>
            <div class="form-group">
                <label for="estadio">Estadio:</label>
                <input type="text" id="estadio" name="estadio" class="form-control">
            </div>
            <div class="form-group">
                <label for="resultado_local">Resultado Local:</label>
                <input type="number" id="resultado_local" name="resultado_local" class="form-control">
            </div>
            <div class="form-group">
                <label for="resultado_visitante">Resultado Visitante:</label>
                <input type="number" id="resultado_visitante" name="resultado_visitante" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Crear Partido</button>
        </form>
    </div>
@endsection
