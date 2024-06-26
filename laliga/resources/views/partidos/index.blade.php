@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center my-5">
    <img src="imagen/1.png" alt="Imagen de ejemplo" class="w-12 h-12 mr-3">
    <h1 class="font-bold text-xl md:text-3xl text-red-500">Partidos</h1>
</div>

<div class="flex justify-center my-5">
    <a href="{{ route('partidos.create') }}" class="text-white bg-green-500 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:text-base px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear Partido</a>
</div>

<div class="overflow-x-auto">
    <table class="table-auto mt-2 w-full max-w-4xl mx-auto text-center">
        <tbody>
            @foreach ($partidos as $partido)
                <tr class="border-b">
                    <td class="px-2 py-1">{{ $partido->equipoLocal->nombre }}</td>
                    <td class="px-2 py-1"><img src="{{ asset('storage/' . $partido->equipoLocal->logo) }}" alt="Logo Local" class="w-12 h-12 mx-auto"></td>
                    <td class="px-2 py-1">{{ $partido->resultado_local }}</td>
                    <td class="px-2 py-1 font-bold text-xl md:text-3xl">X</td>
                    <td class="px-2 py-1">{{ $partido->resultado_visitante }}</td>
                    <td class="px-2 py-1"><img src="{{ asset('storage/' . $partido->equipoVisitante->logo) }}" alt="Logo Visitante" class="w-12 h-12 mx-auto"></td>
                    <td class="px-2 py-1">{{ $partido->equipoVisitante->nombre }}</td>
                    <td class="px-2 py-1">
                        <a href="{{ route('partidos.show', $partido->id) }}" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="flex my-5 justify-center">
    <a href="{{ route('home') }}" class="text-white bg-red-500 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:text-base px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Volver</a>
</div>
@endsection
