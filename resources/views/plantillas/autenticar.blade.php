<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('extensiones/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('extensiones/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('extensiones/fontawesome/css/all.css') }}">
    {{-- Estilos --}}
    <link rel="stylesheet" href="{{ asset('css/fuentes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bases.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tienda.css') }}">
    <title>{{ env('APP_NAME') }}</title>
    <script>window.CSRF_TOKEN = "{{ csrf_token() }}";</script>
</head>
<body>
    {{-- @include('plantillas.cabecera') --}}
    @include('plantillas.modales')
    @include('plantillas.avisos')
    <div class="container pt-4 pb-4">
        <div class="align-self-center">
            @yield('contenido')
        </div>
    </div>
    @include('plantillas.pie')
</body>
</html>