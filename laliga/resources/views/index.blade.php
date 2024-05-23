
@extends('layouts.app')

@section('content')

<body>
    
<div class="flex justify-center">
            <h1 class="text-4xl font-bold mb-4 text-green">Laliggaa</h1>
            <img src="imagen/1.png" alt="Imagen de ejemplo">

        </div>
    <div class="links">
        <a href="{{ route('equipos.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ver Equipos</a>
        <a href="{{ route('partidos.index') }}" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ver Partidos</a>
    </div>
</body>

@endsection