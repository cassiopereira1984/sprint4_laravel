@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center my-5">
    <img src="{{ asset('imagen/1.png') }}" alt="Imagen de ejemplo" class="w-12 h-12 mr-3">
    <h1 class="font-bold text-xl md:text-3xl text-red-500">Crear Partido</h1>
</div>

<div class="flex justify-center">
    <form method="POST" action="{{ route('partidos.store') }}" class="w-full max-w-md bg-white p-5 rounded-lg shadow-md" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="equipo_local" class="block text-gray-700 font-bold mb-2">Equipo Local:</label>
            <select name="equipo_local_id" id="equipo_local" class="form-control border border-gray-300 rounded-lg p-2 w-full">
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                @endforeach
            </select>
        </div>
        @error('equipo_local') <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
        <div class="mb-4">
            <label for="equipo_visitante" class="block text-gray-700 font-bold mb-2">Equipo Visitante:</label>
            <select name="equipo_visitante_id" id="equipo_visitante" class="form-control border border-gray-300 rounded-lg p-2 w-full">
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                @endforeach
            </select>
        </div>
        @error('equipo_visitante') <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
        <div class="mb-4">
            <label for="fecha" class="block text-gray-700 font-bold mb-2">Fecha:</label>
            <input type="datetime-local" id="fecha" name="fecha" class="form-control border border-gray-300 rounded-lg p-2 w-full">
        </div>
        @error('equipo_visitante') <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
        <div class="mb-4">
            <label for="estadio" class="block text-gray-700 font-bold mb-2">Estadio:</label>
            <input type="text" id="estadio" name="estadio" class="form-control border border-gray-300 rounded-lg p-2 w-full">
        </div>
        @error('estadio') <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
        <div class="mb-4">
            <label for="resultado_local" class="block text-gray-700 font-bold mb-2">Resultado Local:</label>
            <input type="number" id="resultado_local" name="resultado_local" class="form-control border border-gray-300 rounded-lg p-2 w-full">
        </div>
        @error('resultado_local') <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
        <div class="mb-4">
            <label for="resultado_visitante" class="block text-gray-700 font-bold mb-2">Resultado Visitante:</label>
            <input type="number" id="resultado_visitante" name="resultado_visitante" class="form-control border border-gray-300 rounded-lg p-2 w-full">
        </div>
        @error('resultado_visitante') <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
        <button type="submit" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Crear Partido</button>
    </form>
</div>

<div class="flex justify-center my-5">
    <a href="{{ route('partidos.index') }}" class="text-white bg-red-500 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Volver</a>
</div>
@endsection
