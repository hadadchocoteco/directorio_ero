<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaRango extends Model
{
    use HasFactory;

    protected $table = 'cuenta_rangos';
    protected $fillable = [
        'rango',
        'cantidadVisitas',
        'porcentajeExperienciaPositiva',
        'activo',
    ];
}
