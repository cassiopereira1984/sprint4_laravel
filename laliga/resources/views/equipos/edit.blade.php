@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center my-5">
    <img src="{{ asset('imagen/1.png') }}" alt="Imagen de ejemplo" class="w-12 h-12 mr-3">
    <h1 class="font-bold text-3xl text-red-500">Editar Equipo</h1>
</div>

<div class="flex justify-center">
    <form method="POST" action="{{ route('equipos.update', $equipo->id) }}" enctype="multipart/form-data" class="w-2/4 bg-white p-5 rounded-lg shadow-md">
        @csrf
        @method('PUT')
        <div class="form-group mb-4">
            <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre del Equipo:</label>
            <input type="text" id="nombre" name="nombre" class="form-control border border-gray-300 rounded-lg p-2 w-full" value="{{ $equipo->nombre }}">
        </div>
        <div class="form-group mb-4">
            <label for="ciudad" class="block text-gray-700 font-bold mb-2">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad" class="form-control border border-gray-300 rounded-lg p-2 w-full" value="{{ $equipo->ciudad }}">
        </div>
        <div class="form-group mb-4">
            <label for="fundacion" class="block text-gray-700 font-bold mb-2">Fundación:</label>
            <input type="date" id="fundacion" name="fundacion" class="form-control border border-gray-300 rounded-lg p-2 w-full" value="{{ $equipo->fundacion ? \Carbon\Carbon::parse($equipo->fundacion)->format('Y-m-d') : '' }}">
        </div>
        <div class="form-group mb-4">
            <label for="estadio" class="block text-gray-700 font-bold mb-2">Estadio:</label>
            <input type="text" id="estadio" name="estadio" class="form-control border border-gray-300 rounded-lg p-2 w-full" value="{{ $equipo->estadio }}">
        </div>
        <div class="form-group mb-4">
            <label for="logo" class="block text-gray-700 font-bold mb-2">Logo del Equipo:</label>
            <input type="file" id="logo" name="logo" class="form-control border border-gray-300 rounded-lg p-2 w-full">
        </div>
        <button type="submit" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
    </form>
</div>

<div class="flex justify-center my-5">
    <a href="{{ route('equipos.index') }}" class="text-white bg-red-500 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Volver</a>
</div>
@endsection
