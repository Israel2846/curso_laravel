@extends('layouts.plantilla')
@section('title', 'Contactanos')
@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{ route('contactanos.store') }}" method="post">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </label>
        <br>
        @error('name')
            <p><strong>{{ $message }}</strong></p>
            <br>
        @enderror

        <label>
            Correo:
            <br>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
        </label>
        <br>
        @error('email')
            <p><strong>{{ $message }}</strong></p>
            <br>
        @enderror

        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4">{{ old('mensaje') }}</textarea>
        </label>
        <br>
        @error('mensaje')
            <p><strong>{{ $message }}</strong></p>
            <br>
        @enderror

        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert('{{ session('info') }}')
        </script>
    @endif
@endsection
