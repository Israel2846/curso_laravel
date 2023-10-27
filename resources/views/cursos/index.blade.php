@extends('layouts.plantilla')
@section('title', 'Index')
@section('content')

    <h1>Bienvenido a la página de cursos</h1>
    <a href="{{ route('cursos.create') }}">Crear curso</a>

    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso->name }}</li>
        @endforeach
    </ul>

    {{ $cursos->links() }}

@endsection
