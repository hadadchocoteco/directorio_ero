<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilVerificacionEstatus extends Model
{
    use HasFactory;

    protected $table = 'perfil_verificacion_estatus';
    protected $fillable = [
        'perfilEstatus', /* enviado, recibido, revisando, verificado, rechazado */
    ];
}
