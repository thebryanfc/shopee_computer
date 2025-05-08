@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name_client">Nombre</label>
            <input type="text" name="name_client" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Adress">Dirección</label>
            <input type="text" name="Adress" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Teléfono</label>
            <input type="text" name="phone_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="E-mail">Email</label>
            <input type="email" name="E-mail" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_purchase">Última Compra</label>
            <input type="text" name="last_purchase" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
