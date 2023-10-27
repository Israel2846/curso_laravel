@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')
    <h1>En esta pagina podrás crear un curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br>

        <label>
            Categoría:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>

        <button type="submit">Enviar</button>
    </form>
@endsection
