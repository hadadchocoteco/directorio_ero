<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaPerfilExperiencia extends Model
{
    use HasFactory;

    protected $table = 'cuenta_perfil_experiencias';
    protected $fillable = [
        'idAnuncio',
        'idUsuarioCliente',
        'experiencia',
        'fechaHoraExperiencia',
        'activo',
        'experienciaNotaRechazo',
    ];
}
