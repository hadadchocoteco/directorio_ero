<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaRecargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_recargas', function (Blueprint $table) {
            $table->id();
            $table->integer('idCuenta')->nullable();
            $table->integer('idTipoCuenta')->nullable();
            $table->decimal('montoRecarga', 12, 3)->default(0);
            $table->integer('cantidad')->default(0);
            $table->integer('publicacionesRecarga')->default(0);
            $table->char('personaPagaRecargaEfectivo', 100)->nullable();
            $table->char('codigoMovimientoRecarga', 100)->nullable();
            $table->char('opcionRecarga', 30)->nullable();
            $table->char('estatusRecarga', 30)->nullable();
            $table->char('correoRecarga', 80)->nullable();
            $table->char('telefonoRecarga', 15)->nullable();
            $table->char('pasarela', 30)->nullable();
            $table->dateTime('fechaHoraRecargaCaptura')->nullable();
            $table->dateTime('fechaHoraRecargaPagada')->nullable();
            $table->dateTime('fechaHoraRecargaAutorizada')->nullable();
            $table->dateTime('fechaHoraRecargaRechazada')->nullable();
            $table->dateTime('fechaHoraMovimiento')->nullable();
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
        Schema::dropIfExists('cuenta_recargas');
    }
}
