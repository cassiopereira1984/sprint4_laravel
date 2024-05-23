@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Partidos</h1>
    <a href="{{ route('partidos.create') }}" class="btn btn-primary mb-3">Crear Partido</a>
    <a href="{{ route('home') }}" class="btn btn-primary">volver</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Equipo Local</th>
                <th>Logo Local</th>
                <th>Equipo Visitante</th>
                <th>Logo Visitante</th>
                <th>Fecha</th>
                <th>Resultado Local</th>
                <th>Resultado Visitante</th>
                <th>Estadio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partidos as $partido)
                <tr>
                    <td>{{ $partido->id }}</td>
                    <td>{{ $partido->equipoLocal->nombre }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $partido->equipoLocal->logo) }}" alt="Logo Local" class="img-fluid" style="max-height: 50px;">
                    </td>
                    <td>{{ $partido->equipoVisitante->nombre }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $partido->equipoVisitante->logo) }}" alt="Logo Visitante" class="img-fluid" style="max-height: 50px;">
                    </td>
                    <td>{{ $partido->fecha }}</td>
                    <td>{{ $partido->resultado_local }}</td>
                    <td>{{ $partido->resultado_visitante }}</td>
                    <td>{{ $partido->estadio }}</td>
                    <td>
                        <a href="{{ route('partidos.show', $partido->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('partidos.edit', $partido->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('partidos.destroy', $partido->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
