@extends('layouts.app')

@section('content')
    <h1>Estadísticas</h1>

    <!-- Tabla de Inventario -->
    <h2>Productos con 0 existencias</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Existencias</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productosSinExistencias as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->name_product }}</td>
                    <td>{{ $producto->existencias }}</td>
                    <td>{{ $producto->precio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Productos con 2 existencias</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Existencias</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productosConDosExistencias as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->name_product }}</td>
                    <td>{{ $producto->existencias }}</td>
                    <td>{{ $producto->precio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tabla de Clientes -->
    <h2>Clientes con última compra mayor a $10,000</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No. Cliente</th>
                <th>Nombre</th>
                <th>Última Compra</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientesConCompraMayor as $cliente)
                <tr>
                    <td>{{ $cliente->No_Cliente }}</td>
                    <td>{{ $cliente->name_client }}</td>
                    <td>{{ $cliente->last_purchase }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
