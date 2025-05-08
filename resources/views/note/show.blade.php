@extends('layouts.app')

@section('content')
<a href="{{ route('note.index')}}">Regresar</a>
<h1>{{ $note->title }}</h1>
<p>{{ $note->description }}</p>
@endsection