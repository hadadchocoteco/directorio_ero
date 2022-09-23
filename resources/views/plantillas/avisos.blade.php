@if(session()->has('error'))
    <div class="ps-4 pe-4 pt-3 pb-3 alert alert-danger border-0 shadow alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('exito'))
    <div class="ps-4 pe-4 pt-3 pb-3 alert alert-success border-0 shadow alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-circle"></i> {{ session('exito') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('cuidado'))
    <div class="ps-4 pe-4 pt-3 pb-3 alert alert-warning border-0 shadow alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-circle"></i> {{ session('informativo') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if($errors->any())
    <div class="ps-4 pe-4 pt-3 pb-3 alert-danger border-0">
        <ul>
            @foreach ($errors->all() as $error)
                <li><i class="fas fa-exclamation-circle"></i> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif