<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCuenta extends Model
{
    use HasFactory;

    protected $table = 'tipo_cuentas';
    protected $fillable = [
        'tipo',
        'costoPerfil',
        'costoExperiencia',
        'creditoPagoPerfil',
        'creditoPagoExperiencia',
        'descuento',
        'activo',
    ];
}
