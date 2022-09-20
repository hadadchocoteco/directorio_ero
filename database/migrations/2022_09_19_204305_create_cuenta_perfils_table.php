<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaPerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_perfiles', function (Blueprint $table) {
            $table->id();
            $table->integer('idCuenta')->nullable();
            $table->char('direccionPerfil', 250)->nullable();
            $table->char('localidadPerfil', 80)->nullable();
            $table->integer('idMunicipioPerfil')->nullable();
            $table->integer('idEstadoPerfil')->nullable();
            $table->integer('idPaisPerfil')->nullable();
            $table->char('correoPerfil', 80)->nullable();
            $table->char('telefonoPerfil', 15)->nullable();
            $table->tinyInteger('edad')->nullable();
            $table->tinyInteger('idServicio')->nullable();
            $table->char('tituloPerfil', 50)->nullable();
            $table->text('descripcionPerfil')->nullable();
            $table->decimal('creditosCostoPerfil', 12 ,3)->nullable();
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
            $table->decimal('cantidadPerfilVisto', 12, 3)->nullable();
            $table->integer('idCuentaRango')->nullable();
            $table->boolean('perfilActivo')->default(false);
            $table->boolean('perfilVerificado')->default(false);
            $table->string('perfilFotografiaVerificacion', 300)->nullable();
            $table->string('perfilVerificadoExplicacion', 500)->nullable();
            $table->tinyInteger('idPerfilEstatus')->nullable();
            $table->string('fotografiaPerfil', 300)->nullable();
            $table->integer('vecesPerfilEditado')->nullable();
            $table->dateTime('fechaHoraPerfilEditado')->nullable();
            $table->dateTime('fechaHoraPerfilTerminado')->nullable();
            $table->dateTime('fechaHoraPerfilPublicado')->nullable();
            $table->dateTime('fechaHoraPerfilBorrado')->nullable();
            $table->dateTime('fechaHoraPerfilEnviadoRevision')->nullable();
            $table->dateTime('fechaHoraPerfilEnviadoVerificado')->nullable();
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
        Schema::dropIfExists('cuenta_perfiles');
    }
}
