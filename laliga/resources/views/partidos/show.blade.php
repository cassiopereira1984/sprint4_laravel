@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center my-5">
    <img src="{{ asset('imagen/1.png') }}" alt="Imagen de ejemplo" class="w-12 h-12 mr-3">
    <h1 class="font-bold text-xl md:text-3xl text-red-500">Detalles del partido</h1>
</div>

<div class="flex justify-center">
    <div class="w-full max-w-4xl bg-white p-5 rounded-lg shadow-md">
        <table class="table-auto mt-2 w-full max-w-4xl mx-auto text-center">
            <tbody>
                <tr>
                    <td class="px-1 py- text-xl md:text-2xl">{{ $partido->equipoLocal->nombre }}</td>
                    <td class="px-1 py-1"><img src="{{ asset('storage/' . $partido->equipoLocal->logo) }}" alt="Logo Local" class="w-12 h-12 mx-auto"></td>
                    <td class="px-1 py-1 text-xl md:text-2xl">{{ $partido->resultado_local }}</td>
                    <td class="px-1 py-1 font-bold text-xl md:text-3xl">X</td>
                    <td class="px-1 py-1 text-xl md:text-2xl">{{ $partido->resultado_visitante }}</td>
                    <td class="px-1 py-1"><img src="{{ asset('storage/' . $partido->equipoVisitante->logo) }}" alt="Logo Visitante" class="w-12 h-12 mx-auto"></td>
                    <td class="px-1 py-1 text-xl md:text-2xl">{{ $partido->equipoVisitante->nombre }}</td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-around m-4">
            <div>
                <p><strong class=" text-gray-700 font-bold flex justify-center">Fecha</strong> {{ $partido->fecha }}</p>
            </div>
            <div>
                <p><strong class=" text-gray-700 font-bold flex justify-center">Estadio</strong> {{ $partido->estadio }}</p>
            </div>
        </div>
        <div class="flex justify-around mt-4">
            <a href="{{ route('partidos.edit', $partido->id) }}" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar</a>
            <form action="{{ route('partidos.destroy', $partido->id) }}" method="POST" class="inline" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este partido?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Eliminar</button>
            </form>
        </div>
    </div>
</div>

<div class="flex justify-center my-5">
            <a href="{{ route('partidos.index') }}" class="text-white bg-red-500 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:text-base px-4 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Volver</a>
</div>
@endsection
