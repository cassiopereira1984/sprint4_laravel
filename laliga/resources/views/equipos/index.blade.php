@extends('layouts.app')

@section('content')
    <h1>Equipos</h1>
    <a href="{{ route('equipos.create') }}" class="btn btn-primary">Crear Equipo</a>
    <a href="{{ route('home') }}" class="btn btn-primary">volver</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Fundación</th>
                <th>Estadio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
                <tr>
                    <td><img src="{{ asset('storage/' . $equipo->logo) }}" alt="{{ $equipo->nombre }}" width="50" height="50"></td>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->ciudad }}</td>
                    <td>{{ $equipo->fundacion }}</td>
                    <td>{{ $equipo->estadio }}</td>
                    <td>
                        <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display: inline;">
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
