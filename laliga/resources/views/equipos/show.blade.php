@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center my-5">
    <img src="{{ asset('imagen/1.png') }}" alt="Imagen de ejemplo" class="w-12 h-12 mr-3">
    <h1 class="font-bold text-3xl text-red-500">Detalles del Equipo</h1>
</div>

<div class="flex justify-center">
    <div class="w-2/4 bg-white p-5 rounded-lg shadow-md">
        <div class="form-group mb-4">
            <img src="{{ asset('storage/' . $equipo->logo) }}" alt="{{ $equipo->nombre }}" class="w-32 h-32 mx-auto mb-4">
            <p><strong class="block text-gray-700 font-bold mb-2">Nombre:</strong> {{ $equipo->nombre }}</p>
        </div>
        <div class="form-group mb-4">
            <p><strong class="block text-gray-700 font-bold mb-2">Ciudad:</strong> {{ $equipo->ciudad }}</p>
        </div>
        <div class="form-group mb-4">
            <p><strong class="block text-gray-700 font-bold mb-2">Año de Fundación:</strong> {{ \Carbon\Carbon::parse($equipo->fundacion)->format('Y-m-d') }}</p>
        </div>
        <div class="form-group mb-4">
            <p><strong class="block text-gray-700 font-bold mb-2">Estadio:</strong> {{ $equipo->estadio }}</p>
        </div>
        <div class="flex justify-between mt-4">
            <a href="{{ route('equipos.edit', $equipo->id) }}" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar</a>
            <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Eliminar</button>
            </form>
        </div>
    </div>
</div>

<div class="flex justify-center my-5">
    <a href="{{ route('equipos.index') }}" class="text-white bg-red-500 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Volver</a>
</div>
@endsection
