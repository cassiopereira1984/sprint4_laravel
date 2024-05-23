@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center my-5">
    <img src="imagen/1.png" alt="Imagen de ejemplo" class="w-12 h-12 mr-3">
    <h1 class="font-bold text-3xl text-red-500">Partidos</h1>
</div>

<div class="flex justify-center my-5">
    <a href="{{ route('partidos.create') }}" class="text-white bg-green-500 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear Partido</a>
</div>

<div class="overflow-x-auto">
    <table class="table-auto mt-2 w-2/4 mx-auto text-center">
        <thead>
            <tr>
                <th class="px-2 py-1">ID</th>
                <th class="px-2 py-1">Equipo Local</th>
                <th class="px-2 py-1">Logo Local</th>
                <th class="px-2 py-1">Equipo Visitante</th>
                <th class="px-2 py-1">Logo Visitante</th>
                <th class="px-2 py-1">Fecha</th>
                <th class="px-2 py-1">Resultado Local</th>
                <th class="px-2 py-1">Resultado Visitante</th>
                <th class="px-2 py-1">Estadio</th>
                <th class="px-2 py-1">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partidos as $partido)
                <tr>
                    <td class="px-2 py-1">{{ $partido->id }}</td>
                    <td class="px-2 py-1">{{ $partido->equipoLocal->nombre }}</td>
                    <td class="px-2 py-1"><img src="{{ asset('storage/' . $partido->equipoLocal->logo) }}" alt="Logo Local" class="w-12 h-12 mx-auto"></td>
                    <td class="px-2 py-1">{{ $partido->equipoVisitante->nombre }}</td>
                    <td class="px-2 py-1"><img src="{{ asset('storage/' . $partido->equipoVisitante->logo) }}" alt="Logo Visitante" class="w-12 h-12 mx-auto"></td>
                    <td class="px-2 py-1">{{ $partido->fecha }}</td>
                    <td class="px-2 py-1">{{ $partido->resultado_local }}</td>
                    <td class="px-2 py-1">{{ $partido->resultado_visitante }}</td>
                    <td class="px-2 py-1">{{ $partido->estadio }}</td>
                    <td class="px-2 py-1">
                        <a href="{{ route('partidos.show', $partido->id) }}" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ver</a>
                        <a href="{{ route('partidos.edit', $partido->id) }}" class="text-white bg-yellow-500 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-1 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Editar</a>
                        <form action="{{ route('partidos.destroy', $partido->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="flex justify-center my-5">
    <a href="{{ route('home') }}" class="text-white bg-red-500 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Volver</a>
</div>
@endsection
