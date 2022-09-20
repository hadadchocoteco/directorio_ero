<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaPerfil extends Model
{
    use HasFactory;

    protected $table = 'cuenta_perfiles';
    protected $fillable = [
        'idCuenta',
        'direccionPerfil',
        'localidadPerfil',
        'idMunicipioPerfil',
        'idEstadoPerfil',
        'idPaisPerfil',
        'correoPerfil',
        'telefonoPerfil',
        'edad',
        'idServicio',
        'tituloPerfil',
        'descripcionPerfil',
        'creditosCostoPerfil',
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
        'cantidadPerfilVisto',
        'idCuentaRango',
        'perfilActivo',
        'perfilVerificado',
        'perfilFotografiaVerificacion',
        'perfilVerificadoExplicacion',
        'idPerfilEstatus',
        'fotografiaPerfil',
        'vecesPerfilEditado',
        'fechaHoraPerfilEditado',
        'fechaHoraPerfilTerminado',
        'fechaHoraPerfilPublicado',
        'fechaHoraPerfilBorrado',
        'fechaHoraPerfilEnviadoRevision',
        'fechaHoraPerfilEnviadoVerificado',
    ];
}
