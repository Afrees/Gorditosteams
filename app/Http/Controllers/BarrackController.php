<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barrack;

class BarrackController extends Controller
{
    // Mostrar la lista de barracks
    public function index()
    {
        $barracks = Barrack::all();
        return view('barracks.index', compact('barracks'));
    }

    // Mostrar el formulario para crear un nuevo barrack
    public function create()
    {
        return view('barracks.create');
    }

    // Guardar un nuevo barrack en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'location' => 'required|string|max:100',
        ]);

        Barrack::create($request->all());

        return redirect('/barracks')->with('success', 'Barrack creado correctamente.');
    }

    // Eliminar un barrack
    public function destroy(Request $request)
    {
        $barrack = Barrack::findOrFail($request->id);
        $barrack->delete();
        return redirect('/barracks')->with('success', 'Barrack eliminado correctamente.');
    }
}
