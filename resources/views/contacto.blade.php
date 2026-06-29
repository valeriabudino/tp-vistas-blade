@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<div class="card">
    <h2><i class="fa-solid fa-envelope"></i> Contacto</h2>
    <p>Comunicate con nosotros ante cualquier consulta.</p>
    @isset($email)
    <p><strong><i class="fa-solid fa-envelope"></i> Email:</strong> {{ $email }}</p>
    @endisset
    <p><strong><i class="fa-solid fa-phone"></i> Teléfono:</strong> (011) 1234-5678</p>
    <p><strong><i class="fa-solid fa-location-dot"></i> Dirección:</strong> Av. Siempre Viva 123, CABA</p>
    <hr style="margin: 20px 0;">
    <h3>Dejanos tu mensaje</h3>
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
