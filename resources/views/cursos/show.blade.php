@extends('layouts.plantilla')
@section('title', 'Curso' . $curso->name)
@section('content')

    <h1>Bienvenido al cursos {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index') }}">Volver a cursos</a>
    <br>
    <p><strong>Categoría: </strong>{{ $curso->categoria }}</p>
    <p>{{ $curso->descripcion }}</p>

@endsection
