<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaPerfilExperienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_perfil_experiencias', function (Blueprint $table) {
            $table->id();
            $table->integer('idAnuncio')->nullable();
            $table->integer('idUsuarioCliente')->nullable();
            $table->string('experiencia', 500)->nullable();
            $table->dateTime('fechaHoraExperiencia')->nullable();
            $table->boolean('activo')->default(false);
            $table->dateTime('experienciaNotaRechazo')->nullable();
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
        Schema::dropIfExists('cuenta_perfil_experiencias');
    }
}
