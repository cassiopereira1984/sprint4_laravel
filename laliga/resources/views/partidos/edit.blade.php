@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Partido</h2>
        <form action="{{ route('partidos.update', $partido->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="equipo_local">Equipo Local:</label>
                <select name="equipo_local_id" id="equipo_local" class="form-control">
                    @foreach ($equipos as $equipo)
                        <option value="{{ $equipo->id }}" {{ $partido->equipo_local_id == $equipo->id ? 'selected' : '' }}>
                            {{ $equipo->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="equipo_visitante">Equipo Visitante:</label>
                <select name="equipo_visitante_id" id="equipo_visitante" class="form-control">
                    @foreach ($equipos as $equipo)
                        <option value="{{ $equipo->id }}" {{ $partido->equipo_visitante_id == $equipo->id ? 'selected' : '' }}>
                            {{ $equipo->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="datetime-local" id="fecha" name="fecha" class="form-control" value="{{ $partido->fecha }}">
            </div>

            <div class="form-group">
                <label for="estadio">Estadio:</label>
                <input type="text" id="estadio" name="estadio" class="form-control" value="{{ $partido->estadio }}">
            </div>

            <div class="form-group">
                <label for="resultado_local">Resultado Local:</label>
                <input type="number" id="resultado_local" name="resultado_local" class="form-control" value="{{ $partido->resultado_local }}">
            </div>

            <div class="form-group">
                <label for="resultado_visitante">Resultado Visitante:</label>
                <input type="number" id="resultado_visitante" name="resultado_visitante" class="form-control" value="{{ $partido->resultado_visitante }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Partido</button>
        </form>
    </div>
@endsection
