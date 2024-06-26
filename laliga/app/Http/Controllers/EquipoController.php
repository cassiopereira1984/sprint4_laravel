<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
class EquipoController extends Controller
{

    /*Hola soy una feature para de la rama modelo que se utilizará para hacher um merge de 
    cherry-pick en la rama de reentrega.*/

    /*Hola otra vez, ahora soy una feature para que un merge directo a la rama reentrega.*/
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        $datosValidos = $request->validate([
            'nombre' => 'required|string|max:100',
            'ciudad' => 'required|string|max:100',
            'fundacion' => 'required|date',
            'estadio' => 'required|string|max:100',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $nombreArchivo = time() . '_' . $logo->getClientOriginalName();
            $rutaArchivo = $logo->storeAs('logos', $nombreArchivo, 'public');
            $datosValidos['logo'] = $rutaArchivo;
        }

        Equipo::create($datosValidos);
        return redirect()->route('equipos.index')->with('success', 'Equipo creado correctamente.');
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
        $datosValidos = $request->validate([
            'nombre' => 'required|string|max:100',
            'ciudad' => 'required|string|max:100',
            'fundacion' => 'required|date',
            'estadio' => 'required|string|max:100',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
    
        $equipo->update($datosValidos);
        return redirect()->route('equipo.index')->with('success', 'Equipo actualizado correctamente.');
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado correctamente.');
    }
}

?>  