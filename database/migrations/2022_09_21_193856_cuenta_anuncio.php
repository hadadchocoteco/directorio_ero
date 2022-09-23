<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CuentaAnuncio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_anuncios', function (Blueprint $table) {
            $table->id();
            $table->integer('idCuenta')->nullable();
            $table->char('direccionAnuncio', 250)->nullable();
            $table->char('localidadAnuncio', 80)->nullable();
            $table->integer('idMunicipioAnuncio')->nullable();
            $table->integer('idEstadoAnuncio')->nullable();
            $table->integer('idPaisAnuncio')->nullable();
            $table->char('correoAnuncio', 80)->nullable();
            $table->char('telefonoAnuncio', 15)->nullable();
            $table->tinyInteger('edad')->nullable();
            $table->tinyInteger('idServicio')->nullable();
            $table->char('tituloAnuncio', 50)->nullable();
            $table->text('descripcionAnuncio')->nullable();
            $table->decimal('creditosCostoAnuncio', 12 ,3)->nullable();
            $table->string('lugaresEncuentros', 450)->nullable();
            $table->boolean('contactarPorEmail')->default(false);
            $table->boolean('contactarPorTelefono')->default(false);
            $table->boolean('contactarPorWhatsapp')->default(false);
            $table->boolean('peticionAnticipoCita')->default(false);
            $table->char('web', 250)->nullable();
            $table->boolean('mapa')->default(false);
            $table->boolean('mayorDeEdad')->default(false);
            $table->boolean('acuerdoPrivacidad')->default(false);
            $table->decimal('experienciaPositiva', 12, 3)->nullable();
            $table->decimal('experienciaNegativa', 12, 3)->nullable();
            $table->decimal('cantidadAnuncioVisto', 12, 3)->nullable();
            $table->integer('idCuentaRango')->nullable();
            $table->boolean('anuncioActivo')->default(false);
            $table->boolean('anuncioVerificado')->default(false);
            $table->string('anuncioFotografiaVerificacion', 300)->nullable();
            $table->string('anuncioVerificadoExplicacion', 500)->nullable();
            $table->tinyInteger('idAnuncioVerificacionEstatus')->nullable();
            $table->string('fotografiaAnuncio', 300)->nullable();
            $table->integer('vecesAnuncioEditado')->nullable();
            $table->dateTime('fechaHoraAnuncioEditado')->nullable();
            $table->dateTime('fechaHoraAnuncioTerminado')->nullable();
            $table->dateTime('fechaHoraAnuncioPublicado')->nullable();
            $table->dateTime('fechaHoraAnuncioBorrado')->nullable();
            $table->dateTime('fechaHoraAnuncioEnviadoRevision')->nullable();
            $table->dateTime('fechaHoraAnuncioEnviadoVerificado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenta_anuncios');
    }
}
