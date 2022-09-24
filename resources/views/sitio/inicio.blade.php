@extends('plantillas.sitio')
@section('contenido')
<div class="border pt-1 pe-1 mb-2">
    <div class="row">
        <div class="col-12 col-md-1">
            <img width="100%" src="{{ asset('imagenes/sitio/Cube-1s-200px.gif') }}" alt="">
        </div>
        <div class="col-12 col-md-9">
            <h4>Esto es un título del anuncio para dar una idea de lo que vendo</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="col-12 col-md-2">
            <div class="d-grid mb-1">
                <a href="" class="btn fondo-rojo-1 rounded-0 text-white">Detalles</a>
            </div>
            <div class="d-grid">
                <a href="" class="btn fondo-rojo-1 rounded-0 text-white">Contactar</a>
            </div>
        </div>
    </div>
</div>
@endsection