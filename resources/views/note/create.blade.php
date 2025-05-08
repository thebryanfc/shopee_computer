@extends('layouts.app')

@section('content')
<a href="{{ route('note.index')}}">Regresar</a>
<form method = "POST" action="{{ route('note.store') }}">
    @csrf
    <label for="">Title</label>
    <input type="text" name="title">
    @error('title')
        <p sytle="color:red"> {{ $message }} </p>
    @enderror

    <label for="">Descripcion:</label>
    <input type="text" name="description">
    @error('Descripcion')
        <p sytle="color:red"> {{ $message }} </p>
    @enderror

    <input type="submit" value="Create">
</form>
@endsection