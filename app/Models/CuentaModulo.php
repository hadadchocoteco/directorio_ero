<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaModulo extends Model
{
    use HasFactory;

    protected $table = 'cuenta_modulos';
    protected $fillable = [
        'idCuenta',
        'idModulo',
        'ver',
        'guardar',
        'actualizar',
        'inhabilitar',
        'eliminar',
        'activar',
    ];
}
