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
    <link rel="stylesheet" href="{{ asset('css/sitio.css') }}">
    <title>{{ env('APP_NAME') }}</title>
    <script>
        var pesosMXN = Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
        });

        window.CSRF_TOKEN = "{{ csrf_token() }}";
        assetCarga = "{{ asset('imagenes/sitio/Cube-1s-200px.gif') }}";
    </script>
</head>
<body>
    @include('plantillas.cabecera')
    @include('plantillas.modales')
    @include('plantillas.avisos')
    <div class="pt-4 pb-4 container">
        @yield('contenido')
    </div>
    @include('plantillas.pie')
    <script>
        try {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            /* cantidadCarrito();

            document.getElementById('irBuscar').addEventListener('click', function( event ) {
                irBuscarArticulo();
            });

            document.getElementById('buscarDescripcionArticulo').addEventListener('keypress', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                    irBuscarArticulo();
                }
            }); */
        } catch (error) {
            console.log(error);
        }
    </script>
</body>
</html>