<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso de laravel - @yield('title')</title>
    <meta name="descripcion" content="@yield('meta-description', 'default')">
    {{-- trabajando con vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    {{-- PRIMERA FORMA DE AGREGAR JS Y CSS A NUESTRO PROYECTO --}}
    {{-- Esto a punta la carpeta public. la public es la unica visble en el navegador --}}
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    {{-- Esto a punta la carpeta public. la public es la unica visble en el navegador --}}
    {{-- <script src="/js/app.js"></script> --}}
</head>
<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            @include('layouts.navigation')
    
            @yield('content')
        </div>
    </div>
    
</body>
</html>
