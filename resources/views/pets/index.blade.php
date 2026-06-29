@extends('layouts.app')

@section('title', 'Listado de Mascotas')

@section('content')
<div class="card">
    <h2><i class="fa-solid fa-paw"></i> Directorio de Mascotas</h2>

    @if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="actions">
        <a href="{{ route('pets.create') }}" class="btn"><i class="fa-solid fa-plus"></i> Registrar Nueva Mascota</a>
    </div>

    <form method="GET" action="{{ route('pets.index') }}" style="margin-bottom: 20px; display: flex; gap: 10px; align-items: end;">
        <div class="form-group" style="margin-bottom: 0; flex: 1;">
            <label>Filtrar por especie o nombre:</label>
            <input type="text" name="buscar" placeholder="Ej. Gato, Perro..." value="{{ request('buscar') }}">
        </div>
        <button type="submit" class="btn"><i class="fa-solid fa-search"></i> Buscar</button>
        @if(request('buscar'))
        <a href="{{ route('pets.index') }}" class="btn btn-secondary"><i class="fa-solid fa-times"></i> Limpiar</a>
        @endif
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->species }}</td>
                <td>{{ $pet->age }} años</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $pets->links() }}
    </div>
</div>
@endsection
