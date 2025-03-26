<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corp;

class CorpController extends Controller
{
    // Mostrar la lista de corps
    public function index()
    {
        $corps = Corp::all();
        return view('corps.index', compact('corps'));
    }

    // Mostrar el formulario para crear un nuevo corp
    public function create()
    {
        return view('corps.create');
    }

    // Guardar un nuevo corp en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'denomination' => 'required|string|max:50',
        ]);

        Corp::create($request->all());

        return redirect('/corps')->with('success', 'Corp creado correctamente.');
    }

    // Eliminar un corp
    public function destroy(Request $request)
    {
        $corp = Corp::findOrFail($request->id);
        $corp->delete();
        return redirect('/corps')->with('success', 'Corp eliminado correctamente.');
    }
}
