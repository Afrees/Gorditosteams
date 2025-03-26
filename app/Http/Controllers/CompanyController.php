<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    // Mostrar la lista de compañías
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    // Mostrar el formulario para crear una nueva compañía
    public function create()
    {
        return view('companies.create');
    }

    // Guardar una nueva compañía en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'barrack_id' => 'required|exists:barracks,id', // Relación con Barrack
        ]);

        Company::create($request->all());

        return redirect('/companies')->with('success', 'Compañía creada correctamente.');
    }

    // Eliminar una compañía
    public function destroy(Request $request)
    {
        $company = Company::findOrFail($request->id);
        $company->delete();
        return redirect('/companies')->with('success', 'Compañía eliminada correctamente.');
    }
}
