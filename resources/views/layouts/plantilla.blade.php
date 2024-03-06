<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href="{{asset('icons/boxicons-2.1.1/css/boxicons.min.css')}}" rel='stylesheet'>
    <title>@yield('title')</title>
</head>

<body>
    <header>
    <div class="banner-left">
            <a href="{{route('inicio')}}" class="caja">Pagina de inicio</a>
            <a href="{{route('genero','Terror')}}" class="caja">Terror</a>
            <a href="{{route('genero','Drama')}}" class="caja">Drama</a>
            <a href="{{route('genero','Comedia')}}" class="caja">Comedia</a>
            <a href="{{ route('crear_pelicula') }}" class="caja">Crear Película</a>
        </div>
           @if (isset($_SESSION['usuario']))
           <div class="banner-right">
            <a href="{{route('login')}}" class="caja IS">{{$_SESSION['usuario']}}</a>
            <a href="{{route('cs')}}" class="caja IS CC">Cerrar Sesion</a>
                      
        </div>
        @else
        <div class="banner-right">
            <a href="{{route('login')}}" class="caja CC">Inicia sesion</a>          
        </div>
            @endif
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>