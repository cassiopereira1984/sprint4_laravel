<nav class="bg-red-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white text-xl">Laliga</div>
        <div class="flex space-x-4">
            <a href="{{ route('equipos.index') }}" class="text-white hover:bg-blue-700 px-3 py-2 rounded-md text-sm font-medium">Equipos</a>
            <a href="{{ route('partidos.index') }}" class="text-white hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Partidos</a>
        </div>
    </div>
</nav>