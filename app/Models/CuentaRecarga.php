<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaRecarga extends Model
{
    use HasFactory;

    protected $table = 'cuenta_recargas';
    protected $fillable = [
        'idCuenta',
        'idTipoCuenta',
        'montoRecarga',
        'cantidad',
        'publicacionesRecarga',
        'personaPagaRecargaEfectivo',
        'codigoMovimientoRecarga',
        'opcionRecarga',
        'estatusRecarga',
        'correoRecarga',
        'telefonoRecarga',
        'pasarela', /*Nombre pasarela*/
        'fechaHoraRecargaCaptura',
        'fechaHoraRecargaPagada',
        'fechaHoraRecargaAutorizada',
        'fechaHoraRecargaRechazada',
        'fechaHoraMovimiento',
    ];
}
