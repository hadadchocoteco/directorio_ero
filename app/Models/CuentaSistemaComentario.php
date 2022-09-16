<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaSistemaComentario extends Model
{
    use HasFactory;

    protected $table = 'cuenta_sistema_comentarios';
    protected $fillable = [
        'idCuenta',
        'comentario',
        'respuesta',
        'fechaHoraComentario',
        'fechaHoraRespuesta',
    ];
}
