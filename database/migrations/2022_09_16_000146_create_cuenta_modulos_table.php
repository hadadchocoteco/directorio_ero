<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_modulos', function (Blueprint $table) {
            $table->id();
            $table->integer('idCuenta')->nullable();
            $table->integer('idModulo')->nullable();
            $table->boolean('ver')->default(false);
            $table->boolean('guardar')->default(false);
            $table->boolean('actualizar')->default(false);
            $table->boolean('inhabilitar')->default(false);
            $table->boolean('eliminar')->default(false);
            $table->boolean('activo')->default(false);
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
        Schema::dropIfExists('cuenta_modulos');
    }
}
