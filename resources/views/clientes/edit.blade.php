@extends('layouts.app')

@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->No_Cliente) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name_client">Nombre</label>
            <input type="text" name="name_client" class="form-control" value="{{ $cliente->name_client }}" required>
        </div>
        <div class="form-group">
            <label for="Adress">Dirección</label>
            <input type="text" name="Adress" class="form-control" value="{{ $cliente->Adress }}" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Teléfono</label>
            <input type="text" name="phone_number" class="form-control" value="{{ $cliente->phone_number }}" required>
        </div>
        <div class="form-group">
            <label for="E-mail">Email</label>
            <input type="email" name="E-mail" class="form-control" value="{{ $cliente->{'E-mail'} }}" required>
        </div>
        <div class="form-group">
            <label for="last_purchase">Última Compra</label>
            <input type="text" name="last_purchase" class="form-control" value="{{ $cliente->last_purchase }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
