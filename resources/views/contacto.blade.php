@extends('layouts.app')
@section('titulo', 'Contacto')
@section('contenido')
<h2>Contacto</h2>
<p>Puede comunicarse con nosotros mediante el siguiente correo:</p>
@isset($email)
<p><strong>Email:</strong> {{ $email }}</p>
@endisset
<form>
<label>Nombre:</label><br>
<input type="text" name="nombre"><br><br>
<label>Mensaje:</label><br>
<textarea name="mensaje" rows="5"></textarea><br><br>
<button type="submit">Enviar</button>
<select name="provincia">
    <option value="">Seleccione una provincia</option>
    @forelse($provincias as $provincia)
        <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
    @empty
        <option value="">No hay provincias disponibles</option>
    @endforelse
</select>
</form>
@endsection