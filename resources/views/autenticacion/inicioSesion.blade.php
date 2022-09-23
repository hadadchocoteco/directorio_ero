@extends('plantillas.autenticar')
@section('contenido')
<form class="row" method="POST" action="{{ route('autenticar') }}">
    @csrf
    <div class="col-12 col-md-3 pt-4 mt-4">
        <div class="card border borde-radio-4 mt-4 pt-4" style="max-width: 540px;">
            <div class="card-body borde-radio-4 pb-4">
                <p class="fs-4 text-center">¡Bienvenido!</p>
                <p class="fs-5 text-center">Inicie sesión con tu correo electrónico</p>
                <div id="contenedorAviso" class="p-1 fw-bold text-danger"></div>
                <div class="row pb-4">
                    <div class="col-12 mb-2">
                        <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo electrónico">
                    </div>
                    <div class="col-12 mb-2">
                        <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
                    </div>
                    <div class="col-12 d-grid mb-2">
                        <input type="submit" class="btn fondo-verde-2" id="entrar" value="Entrar">
                    </div>
                    <div class="col-12 mb-2 text-end">
                        {{-- <a href="{{ route('recuperarContrasena') }}">Recuperar contraseña</a> --}}
                    </div>
                    <div class="col-12 d-grid">
                        {{-- <a href="{{ route('registroCuenta') }}" class="btn btn-light">Registrarme</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection