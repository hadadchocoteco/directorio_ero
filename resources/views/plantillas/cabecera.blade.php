<div class="fondo-morado-2 pt-4 pb-4">
    <div class="container">
        <div class="d-flex">
            <div class="ms-auto">
                <a href="" class="text-white"><i class="fab fa-whatsapp"></i> Soporte</a>
            </div>
            <div class="ms-3">
                <a href="" class="text-white"><i class="far fa-envelope"></i> correo@gmail.com</a>
            </div>
        </div>
    </div>
    <div class="container pt-3">
        <div class="d-flex">
            <div class="align-items-center me-3">
                <a href="{{ route('inicio') }}" class="fs-4 text-white">DIRECTORIO ERO</a>
            </div>
            <div class="flex-fill">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <select name="rol" id="rol" class="form-select rounded-0 shadow"></select>
                    </div>
                    <div class="col-12 col-md-3">
                        <input type="text" class="form-control rounded-0 shadow" name="buscar" id="buscar" placeholder="Buscar">
                    </div>
                    <div class="col-12 col-md-2">
                        <a href="" class="text-white fs-4"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="d-flex h-100">
                            @if(session()->has('ERO_ID_CLIENTE'))
                                <div class="ms-auto align-self-center">
                                    <a class="text-white" href="{{ route('miCuenta') }}"><i class="fas fa-user"></i> {{ session('ERO_NOMBRE').' '.session('ERO_APELLIDO') }}</a>
                                </div>
                                <div class="ms-4 align-self-center">
                                    <a class="text-white" href="{{ route('cerrarSesion') }}"><i class="fas fa-sign-out-alt"></i> Salir</a>
                                </div>
                            @else
                                <div class="ms-auto align-self-center">
                                    <a class="text-white" href="{{ route('inicioSesion') }}"><i class="fas fa-sign-in-alt"></i> Ingresar</a>
                                </div>
                                <div class="ms-4 align-self-center">
                                    <a class="text-white" href="{{ route('registro') }}"><i class="fas fa-user-plus"></i> Registrarme</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
