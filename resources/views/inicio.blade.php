@extends('layouts.plantillaPeliculas')
<script src="https://cdn.tailwindcss.com"></script>
@section('title', 'peliculas')
@section('content')

<h1 class="titulo-peliculas">Peliculas mas recientes</h1>
<div class="div-peliculas">
    @foreach($peliculas as $pelicula)
    <div class="card-pelicula">
        <img src="{{asset('img/'.$pelicula->imagen)}}" alt="">
        <div class="cuerpo-card">
            <a href="">{{$pelicula->titulo}}</a>
            <p>Director: @foreach($users as $user)
                @if ($user->id == $pelicula->user_id)
                {{$user->nombre_usuario}}
                @endif
                @endforeach
            </p>
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
<div class="paginacion">{{$peliculas->links()}}</div>
@endsection