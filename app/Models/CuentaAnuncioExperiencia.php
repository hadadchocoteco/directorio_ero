<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaAnuncioExperiencia extends Model
{
    use HasFactory;

    protected $table = 'cuenta_anuncio_experiencias';
    protected $fillable = [
        'idAnuncio',
        'idUsuarioCliente',
        'experiencia',
        'fechaHoraExperiencia',
        'activo',
        'experienciaNotaRechazo',
    ];
}
