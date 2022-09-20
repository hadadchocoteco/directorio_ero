<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaPerfilFotografia extends Model
{
    use HasFactory;

    protected $table = 'cuenta_perfil_experiencias';
    protected $fillable = [
        'idPefil',
        'rutaPerfilFotografia',
        'activo',
        'fechaHoraSubida',
        'fechaHoraInhabilitada',
    ];
}
