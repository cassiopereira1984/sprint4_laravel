@extends('layouts.app')

@section('content')
    <h1>Partidos</h1>
    <a href="{{ route('partidos.create') }}" class="btn btn-primary">Crear Partido</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Equipo Local</th>
                <th>Equipo Visitante</th>
                <th>Fecha</th>
                <th>resultado_local</th>
                <th>resultado_visitante</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partidos as $partido)
                <tr>
                    <td>{{ $partido->id }}</td>
                    <td>{{ $partido->equipo_local_id->nombre }}</td>
                    <td>{{ $partido->equipo_visitante_id->nombre }}</td>
                    <td>{{ $partido->fecha }}</td>
                    <td>{{ $partido->resultado_local }}</td>
                    <td>{{ $partido->resultado_visitante }}</td>
                    <td>{{ $partido->estadio }}</td>
                    <td>
                        <a href="{{ route('partidos.show', $partido->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('partidos.edit', $partido->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('partidos.destroy', $partido->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

