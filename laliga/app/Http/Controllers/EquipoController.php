<?php
namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        return view('equipos.create');
    }

    // public function store(Request $request)
    // {
    //     Equipo::create($request->all());
    //     return redirect()->route('equipos.index')->with('success', 'Equipo creado correctamente.');
    // }

    public function store(Request $request)
{
    // Validación de datos aquí si es necesario

    // Crear un nuevo equipo utilizando el método create()
    $equipo = new Equipo();
    $equipo->nombre = $request->input('nombre');
    $equipo->ciudad = $request->input('ciudad');
    $equipo->logo = $request->input('logo');
    $equipo->fundacion = $request->input('fundacion');
    $equipo->estadio = $request->input('estadio');
    $equipo->save();

    // Redireccionar a alguna parte después de guardar el equipo
    return redirect()->route('equipos.index');
}

    public function show(Equipo $equipo)
    {
        return view('equipos.show', compact('equipo'));
    }

    public function edit(Equipo $equipo)
    {
        return view('equipos.edit', compact('equipo'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $equipo->update($request->all());
        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado correctamente.');
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado correctamente.');
    }
}
?>  