@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles del partido</h2>
        <div>
            <p><strong>Equipo Local:</strong> {{ $partido->equipoLocal->nombre }}</p>
            <p><strong>Equipo Visitante:</strong> {{ $partido->equipoVisitante->nombre }}</p>
            <p><strong>Fecha:</strong> {{ $partido->fecha }}</p>
            <p><strong>Estadio:</strong> {{ $partido->estadio }}</p>
            <p><strong>Resultado Local:</strong> {{ $partido->resultado_local }}</p>
            <p><strong>Resultado Visitante:</strong> {{ $partido->resultado_visitante }}</p>
        </div>
        <a href="{{ route('partidos.index') }}" class="btn btn-secondary">Volver al Índice de Partidos</a>
    </div>
@endsection
