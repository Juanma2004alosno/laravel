@extends('layouts.plantillaPeliculas')
<script src="https://cdn.tailwindcss.com"></script>
@section('title', 'generos')
@section('content')

<h1 class="titulo-peliculas">Peliculas {{$nombre_genero}}</h1>
<div class="div-peliculas">
    @foreach($genero as $pelicula)
    <div class="card-pelicula">
        <img src="{{asset('img/'.$pelicula->imagen)}}" alt="">
        <div class="cuerpo-card">
            <h4>{{$pelicula->titulo}}</h4>
            <a href="{{ route('show', ['cod_pelicula' => $pelicula->cod_pelicula]) }}" class="boton-ver">Ver</a>
            <form action="{{ route('eliminar_pelicula', ['cod_pelicula' => $pelicula->cod_pelicula]) }}" method="POST" class="boton-ver">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </div>
    </div>
    @endforeach

</div>
<div class="paginacion">{{$genero->links()}}</div>
@endsection