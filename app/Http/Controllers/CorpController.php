<?php

namespace App\Http\Controllers;

use App\Models\Corp;
use Illuminate\Http\Request;

class CorpController extends Controller {
    public function index() {
        return view('corps.index', ['corps' => Corp::all()]);
    }
    public function create() {
        return view('corps.create');
    }
    public function store(Request $request) {
        $request->validate([
            'denomination' => 'required|max:50'
        ]);
        Corp::create($request->all());
        return redirect()->route('corps.index')->with('success', 'Cuerpo registrado correctamente.');
    }
}
