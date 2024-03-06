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
    <main>
        @yield('content')
    </main>
</body>

</html>