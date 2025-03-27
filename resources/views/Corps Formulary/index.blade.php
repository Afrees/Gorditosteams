@extends('layouts.app')

@section('content')
<h1>Lista de Cuerpos</h1>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
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
