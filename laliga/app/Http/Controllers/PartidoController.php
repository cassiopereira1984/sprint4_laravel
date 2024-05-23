<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;
use App\Models\Equipo;
class PartidoController extends Controller
{
    public function index()
    {
        $partidos = Partido::all();
        return view('partidos.index', compact('partidos'));
    }

    public function create()
    {
        $equipos = Equipo::all(); // Obtener todos los equipos desde tu modelo Equipo
        return view('partidos.create', compact('equipos'));
    }
    
    public function store(Request $request)
    {
        Partido::create($request->all());
        return redirect()->route('partidos.index')->with('success', 'Partido creado correctamente.');
    }

    public function show(Partido $partido)
    {
        return view('partidos.show', compact('partido'));
    }

    public function edit(Partido $partido)
    {
        $equipos = Equipo::all();
        $partido->fecha = date('Y-m-d\TH:i', strtotime($partido->fecha));
        return view('partidos.edit', compact('partido', 'equipos'));
    }
    
    public function update(Request $request, Partido $partido)
    {
        $partido->update($request->all());
        return redirect()->route('partidos.index')->with('success', 'Partido actualizado correctamente.');
    }

    public function destroy(Partido $partido)
    {
        $partido->delete();
        return redirect()->route('partidos.index')->with('success', 'Partido eliminado correctamente.');
    }
}

?>