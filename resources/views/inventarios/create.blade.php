@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Producto</h1>
    <form action="{{ route('inventarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name_product">Nombre del Producto</label>
            <input type="text" name="name_product" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="existencias">Existencias</label>
            <input type="number" name="existencias" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    <a href="{{ route('inventarios.index') }}" class="btn btn-secondary">Volver</a>
@endsection
