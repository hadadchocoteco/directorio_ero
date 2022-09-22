<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaAnuncioFotografia extends Model
{
    use HasFactory;

    protected $table = 'cuenta_anuncio_experiencias';
    protected $fillable = [
        'idPefil',
        'rutaAnuncioFotografia',
        'activo',
        'fechaHoraSubida',
        'fechaHoraInhabilitada',
    ];
}
