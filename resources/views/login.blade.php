@extends('layouts.plantillaLogin')
@section('title', 'login')
@section('content')

<div class="hero"> 
    <form action="{{route('login')}}" method="post" class="formulario">
        @csrf
        <h2>Login</h2>
        <label for="nombre_suario">Nombre de usuario: </label>
        <input type="text" name="nombre_usuario" id="nombre_usuario">
        <label for="contraseña">Contraseña: </label>
        <input type="password" name="contraseña" id="contraseña">
 
   
        <input type="submit" value="Iniciar sesion  " class="btn-login">
    </form>
</div>

@endsection