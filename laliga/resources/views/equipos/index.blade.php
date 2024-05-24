@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center my-5">
    <img src="imagen/1.png" alt="Imagen de ejemplo" class="w-12 h-12 mr-3">
    <h1 class="font-bold text-xl md:text-3xl text-red-500">Equipos</h1>
</div>

<div class="flex justify-center my-5">
    <a href="{{ route('equipos.create') }}" class="text-white bg-green-500 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:text-base px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear Equipo</a>
</div>

<div class="overflow-x-auto">
    <table class="table-auto mt-2 w-full md:w-2/4 mx-auto text-center">
        <thead>
            <tr>
                <th class="px-1 md:px-2 py-1"></th>
                <th class="px-1 md:px-2 py-1">Nombre</th>
                <th class="px-1 md:px-2 py-1">Ciudad</th>
                <th class="px-1 md:px-2 py-1"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
                <tr>
                    <td class="px-1 md:px-2 py-1"><img src="{{ asset('storage/' . $equipo->logo) }}" alt="{{ $equipo->nombre }}" class="w-8 h-8 md:w-12 md:h-12 mx-auto"></td>
                    <td class="px-1 md:px-2 py-1">{{ $equipo->nombre }}</td>
                    <td class="px-1 md:px-2 py-1">{{ $equipo->ciudad }}</td>
                    <td class="px-1 md:px-2 py-1">
                        <a href="{{ route('equipos.show', $equipo->id) }}" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:text-base px-2 py-1 mr-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="flex justify-center my-5">
    <a href="{{ route('home') }}" class="text-white bg-red-500 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:text-base px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Volver</a>
</div>
@endsection
