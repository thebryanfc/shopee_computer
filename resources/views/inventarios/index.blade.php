@extends('layouts.app')

@section('content')
    <h1>Inventario</h1>

    <!-- Formulario para seleccionar cantidad de registros -->
    <form method="GET" action="{{ route('inventarios.index') }}">
        <label for="per_page">Número de filas:</label>
        <input type="number" name="per_page" id="per_page" value="{{ request('per_page', 50) }}" min="1" max="1000">
        <button type="submit" class="btn btn-primary">Aplicar</button>
    </form>

    <a href="{{ route('inventarios.create') }}" class="btn btn-success">Crear Nuevo Producto</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Existencias</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventarios as $inventario)
                <tr>
                    <td>{{ $inventario->id }}</td>
                    <td>{{ $inventario->name_product }}</td>
                    <td>{{ $inventario->existencias }}</td>
                    <td>{{ $inventario->precio }}</td>
                    <td>
                        <a href="{{ route('inventarios.show', $inventario->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('inventarios.edit', $inventario->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('inventarios.destroy', $inventario->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        {{ $inventarios->appends(['per_page' => $perPage])->links() }}
    </div>
@endsection