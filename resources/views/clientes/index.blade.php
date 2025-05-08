@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Clientes</h1>

    <!-- Formulario para seleccionar cantidad de registros -->
    <form method="GET" action="{{ route('clientes.index') }}">
        <label for="per_page">Número de filas:</label>
        <input type="number" name="per_page" id="per_page" value="{{ request('per_page', 50) }}" min="1" max="1000">
        <button type="submit" class="btn btn-primary">Aplicar</button>
    </form>





        <a href="{{ route('clientes.create') }}" class="btn btn-success mb-3">Crear Nuevo Cliente</a>





        
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No. Cliente</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Última Compra</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->No_Cliente }}</td>
                        <td>{{ $cliente->name_client }}</td>
                        <td>{{ $cliente->Adress }}</td>
                        <td>{{ $cliente->phone_number }}</td>
                        <td>{{ $cliente->{'E-mail'} }}</td>
                        <td>{{ $cliente->last_purchase }}</td>
                        <td class="text-center">
                            <a href="{{ route('clientes.show', $cliente->No_Cliente) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('clientes.edit', $cliente->No_Cliente) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('clientes.destroy', $cliente->No_Cliente) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Paginación si se usa Laravel pagination -->
        <div class="d-flex justify-content-center">
            {{ $clientes->links() }}
        </div>
    </div>
@endsection