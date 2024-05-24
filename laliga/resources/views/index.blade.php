
@extends('layouts.app')

@section('content')

<body>
<link rel="stylesheet" href="styles.css">
    <div class="m-10 w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mx-auto">
        <img src="imagen/1.png" alt="Imagen de ejemplo" class="w-full md:w-120 lg:w-120 xl:w-120 mx-auto">        
    </div>
    <div class="links text-center">
        <a href="{{ route('equipos.index') }}" class="text-white bg-blue-500 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-auto">Equipos</a>
        <a href="{{ route('partidos.index') }}" class="text-white bg-green-500 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-auto">Partidos</a>
    </div>
</div>
</body>

@endsection