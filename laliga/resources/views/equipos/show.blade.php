@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles del Equipo</h2>
        <div>
            <p><strong>Nombre:</strong> {{ $equipo->nombre }}</p>
            <p><strong>Ciudad:</strong> {{ $equipo->ciudad }}</p>
            <p><strong>Año de Fundación:</strong> {{ $equipo->fundacion }}</p>
            <p><strong>Estadio:</strong> {{ $equipo->estadio }}</p>
        </div>
        <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Volver al Índice de Equipos</a>
    </div>
@endsection
