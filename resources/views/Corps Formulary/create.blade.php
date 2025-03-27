@extends('layouts.app')
@section('content')
<h1>Formulario Cuerpo</h1>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
<form action="{{ route('corps.store') }}" method="POST">
    @csrf
    <label>
        Ingrese la denominación:
        <br>
        <input type="text" name="denomination" required>
    </label>
    <br><br>
    <button type="submit">Enviar</button>
</form>
@endsection

// Blade View: corps/index.blade.php
@extends('layouts.app')
@section('content')
<h1>Lista de Cuerpos</h1>
@if(session('success'))
    <p style="color: blue;">{{ session('success') }}</p>
@endif
<table border="1">
    <tr>
        <th>ID</th>
        <th>Denominación</th>
    </tr>
    @foreach($corps as $corp)
    <tr>
        <td>{{ $corp->id }}</td>
        <td>{{ $corp->denomination }}</td>
    </tr>
    @endforeach
</table>
@endsection