@extends('layouts.plantillaLogin')

@section('title', 'Detalles de Película')

@section('content')
    <div class="detalles-pelicula">
        <h1>Detalles de la Película: {{ $pelicula->titulo }}</h1>
        <div class="informacion-pelicula">
            <img src="{{ asset('img/' . $pelicula->imagen) }}" alt="Imagen de la película">
            <p><strong>Título:</strong> {{ $pelicula->titulo }}</p>
            <p><strong>Género:</strong> {{ $pelicula->genero }}</p>
            <p><strong>Descripción:</strong> {{ $pelicula->descripcion }}</p>
        </div>
    </div>
@endsection
