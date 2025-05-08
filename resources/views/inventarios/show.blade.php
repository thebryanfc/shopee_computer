@extends('layouts.app')

@section('content')
    <h1>Detalles del Producto</h1>
    <p><strong>ID:</strong> {{ $inventario->id }}</p>
    <p><strong>Nombre del Producto:</strong> {{ $inventario->name_product }}</p>
    <p><strong>Existencias:</strong> {{ $inventario->existencias }}</p>
    <p><strong>Precio:</strong> {{ $inventario->precio }}</p>
    <a href="{{ route('inventarios.index') }}" class="btn btn-secondary">Volver</a>
@endsection
