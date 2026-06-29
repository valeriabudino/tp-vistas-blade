@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<div class="card">
    <h2>Contacto</h2>
    <p>Puede comunicarse con nosotros mediante el siguiente correo:</p>
    @isset($email)
    <p><strong>Email:</strong> {{ $email }}</p>
    @endisset
    <form>
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div class="form-group">
            <label>Mensaje:</label>
            <textarea name="mensaje" rows="5" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; box-sizing: border-box;"></textarea>
        </div>
        <div class="form-group">
            <label>Provincia:</label>
            <select name="provincia" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; box-sizing: border-box;">
                <option value="">Seleccione una provincia</option>
                @forelse($provincias as $provincia)
                    <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
                @empty
                    <option value="">No hay provincias disponibles</option>
                @endforelse
            </select>
        </div>
        <button type="submit" class="btn"><i class="fa-solid fa-paper-plane"></i> Enviar</button>
    </form>
</div>
@endsection
