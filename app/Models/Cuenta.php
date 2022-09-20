<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    protected $table = 'cuentas';
    protected $fillable = [
        'usuario',
        'contrasena',
        'nombre',
        'apellido',
        'sexo',
        'rol',
        'fechaNacimiento',
        'direccion',
        'localidad',
        'idMunicipio',
        'idEstado',
        'idPais',
        'correo',
        'telefono',
        'token',
        'codigo',
        'cantidadPerfilesPermitidos',
        'cantidadExperienciasPermitidos',
        'publicacionesDisponibles',
        'publicacionesGratisDisponibles',
        'cantidadUltimaRecarga',
        'cantidadTotalRecarga',
        'fechaHoraRecarga',
        'activo',
        'fechaHoraRegistro',
        'fechaHoraBaja',
        'idTipoCuenta',
        'administrador',
    ];
}
