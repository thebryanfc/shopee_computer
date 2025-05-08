@extends('layouts.app')

@section('content')
    <h1>Detalles del Cliente</h1>
    <p><strong>No. Cliente:</strong> {{ $cliente->No_Cliente }}</p>
    <p><strong>Nombre:</strong> {{ $cliente->name_client }}</p>
    <p><strong>Dirección:</strong> {{ $cliente->Adress }}</p>
    <p><strong>Teléfono:</strong> {{ $cliente->phone_number }}</p>
    <p><strong>Email:</strong> {{ $cliente->{'E-mail'} }}</p>
    <p><strong>Última Compra:</strong> {{ $cliente->last_purchase }}</p>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
@endsection
