<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroEvento extends Model
{
    use HasFactory;

    protected $table = 'municipios';
    protected $fillable = [
        'evento',
        'descripcion',
        'navegador',
        'idCuentaEvento',
        'fechaHoraEvento',
    ];
}
