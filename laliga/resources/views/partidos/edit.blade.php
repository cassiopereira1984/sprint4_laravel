@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center my-5">
    <img src="{{ asset('imagen/1.png') }}" alt="Imagen de ejemplo" class="w-12 h-12 mr-3">
    <h1 class="font-bold text-xl md:text-3xl text-red-500">Editar Partido</h1>
</div>

<div class="flex justify-center">
    <form action="{{ route('partidos.update', $partido->id) }}" method="POST" class="w-full max-w-md bg-white p-5 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="equipo_local" class="block text-gray-700 font-bold mb-2">Equipo Local:</label>
            <select name="equipo_local_id" id="equipo_local" class="form-control">
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}" {{ $partido->equipo_local_id == $equipo->id ? 'selected' : '' }}>
                        {{ $equipo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="equipo_visitante" class="block text-gray-700 font-bold mb-2">Equipo Visitante:</label>
            <select name="equipo_visitante_id" id="equipo_visitante" class="form-control">
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}" {{ $partido->equipo_visitante_id == $equipo->id ? 'selected' : '' }}>
                        {{ $equipo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="fecha" class="block text-gray-700 font-bold mb-2">Fecha:</label>
            <input type="datetime-local" id="fecha" name="fecha" class="form-control" value="{{ $partido->fecha }}">
        </div>

        <div class="mb-4">
            <label for="estadio" class="block text-gray-700 font-bold mb-2">Estadio:</label>
            <input type="text" id="estadio" name="estadio" class="form-control" value="{{ $partido->estadio }}">
        </div>

        <div class="mb-4">
            <label for="resultado_local" class="block text-gray-700 font-bold mb-2">Resultado Local:</label>
            <input type="number" id="resultado_local" name="resultado_local" class="form-control" value="{{ $partido->resultado_local }}">
        </div>

        <div class="mb-4">
            <label for="resultado_visitante" class="block text-gray-700 font-bold mb-2">Resultado Visitante:</label>
            <input type="number" id="resultado_visitante" name="resultado_visitante" class="form-control" value="{{ $partido->resultado_visitante }}">
        </div>

        <button type="submit" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Actualizar Partido</button>
    </form>
</div>

<div class="flex justify-center my-5">
    <a href="{{ route('partidos.index') }}" class="text-white bg-red-500 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Volver</a>
</div>
@endsection
