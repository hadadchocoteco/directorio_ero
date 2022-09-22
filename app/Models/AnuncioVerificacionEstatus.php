<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnuncioVerificacionEstatus extends Model
{
    use HasFactory;

    protected $table = 'anuncio_verificacion_estatus';
    protected $fillable = [
        'anuncioEstatus', /* enviado, recibido, revisando, verificado, rechazado */
    ];
}
