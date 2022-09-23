@if(session()->has('modalResultadoTitulo'))
    <div class="modal fade" id="modalResultadoTitulo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCargaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-body">
                    <div class="d-flex mb-2">
                        <div class="ms-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-center" id="tituloModalResultado">{{ session('modalResultadoTitulo') }}</h3>
                        <p class="text-center" id="mensajeModalResultado">{{ session('modalResultadoMensaje') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var modalResultadoTitulo = new bootstrap.Modal(document.getElementById('modalResultadoTitulo'), {
            keyboard: false
        });

        modalResultadoTitulo.show();
    </script>
@endif

<div class="modal fade" id="modalResultado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCargaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-body">
                <div class="d-flex mb-2">
                    <div class="ms-auto">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div>
                    <h3 class="text-center" id="tituloResultado"></h3>
                    <p class="text-center" id="mensajeResultado"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var modalResultado = new bootstrap.Modal(document.getElementById('modalResultado'), {
        keyboard: false
    });
</script>