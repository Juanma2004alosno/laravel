@extends('layouts.plantillaLogin')

@section('title', 'Crear Película')

@section('content')
<h1>Crear Película</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('guardar_pelicula') }}" method="POST">
    @csrf
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo">
    <select name="genero" id="genero">
        @foreach($generos as $genero)
        <option value="{{ $genero }}">{{ $genero }}</option>
        @endforeach
    </select>
    <select name="user_id" id="user_id">
        @foreach($users as $user)
        <option value="{{ $user->id }}">{{ $user->nombre_usuario }}</option>
        @endforeach
    </select>

    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion" id="descripcion">
    <label for="imagen">Url imagen:</label>
    <input type="text" name="imagen" id="imagen">

    <button type="submit">Crear Película</button>
</form>
@endsection