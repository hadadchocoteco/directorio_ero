<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaAnuncio extends Model
{
    use HasFactory;

    protected $table = 'cuenta_anuncios';
    protected $fillable = [
        'idCuenta',
        'direccionAnuncio',
        'localidadAnuncio',
        'idMunicipioAnuncio',
        'idEstadoAnuncio',
        'idPaisAnuncio',
        'correoAnuncio',
        'telefonoAnuncio',
        'edad',
        'idServicio',
        'tituloAnuncio',
        'descripcionAnuncio',
        'creditosCostoAnuncio',
        'salidasEncuentros',
        'contactarPorEmail',
        'contactarPorTelefono',
        'contactarPorWhatsapp',
        'peticionAnticipoCita',
        'web',
        'mapa',
        'mayorDeEdad',
        'acuerdoPrivacidad',
        'experienciaPositiva',
        'experienciaNegativa',
        'cantidadAnuncioVisto',
        'idCuentaRango',
        'anuncioActivo',
        'anuncioVerificado',
        'anuncioFotografiaVerificacion',
        'anuncioVerificadoExplicacion',
        'idAnuncioVerificacionEstatus',
        'fotografiaAnuncio',
        'vecesAnuncioEditado',
        'fechaHoraAnuncioEditado',
        'fechaHoraAnuncioTerminado',
        'fechaHoraAnuncioPublicado',
        'fechaHoraAnuncioBorrado',
        'fechaHoraAnuncioEnviadoRevision',
        'fechaHoraAnuncioEnviadoVerificado',
    ];
}
