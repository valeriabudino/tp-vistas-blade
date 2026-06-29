@extends('layouts.app')

@section('title', 'Productos')

@section('content')
<h2>Listado de productos</h2>
<p>Estos productos fueron enviados desde la ruta hacia la vista.</p>

@forelse($productos as $producto)
<div class="card" style="margin-bottom: 15px;">
    @if($producto['precio'] > 3000)
    <p>Producto destacado</p>
    @endif
    <h3>{{ $producto['nombre'] }}</h3>
    <p>Precio: ${{ $producto['precio'] }}</p>
    @if($producto['stock'] > 0)
    <p class="alert-success" style="display: inline-block;">Stock disponible: {{ $producto['stock'] }}</p>
    <livewire:contador />
    @if($producto['precio'] > 3000)
    <p>Producto destacado</p>
    @endif
    @else
    <p style="color: red; font-weight: bold;">Sin stock</p>
    @endif
</div>
@empty
<p>Disculpe, no hay productos disponibles.</p>
@endforelse
@endsection
