<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->id();
            $table->char('usuario', 80)->nullable();
            $table->char('contrasena', 100)->nullable();
            $table->char('nombre', 80)->nullable();
            $table->char('apellido', 80)->nullable();
            $table->char('sexo', 20)->nullable();
            $table->char('rol', 30)->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->char('direccion', 250)->nullable();
            $table->char('localidad', 80)->nullable();
            $table->integer('idMunicipio')->nullable();
            $table->tinyInteger('idEstado')->nullable();
            $table->tinyInteger('idPais')->nullable();
            $table->char('correo', 80)->nullable();
            $table->char('telefono', 15)->nullable();
            $table->char('token', 150)->nullable();
            $table->char('codigo', 10)->nullable();
            $table->integer('cantidadAnunciosPermitidos')->default(0);
            $table->integer('cantidadExperienciasPermitidos')->default(0);
            $table->integer('anunciosDisponibles')->default(0);
            $table->integer('anunciosGratisDisponibles')->default(0);
            $table->decimal('cantidadUltimaRecarga', 12, 3)->default(0);
            $table->decimal('cantidadTotalRecarga', 12, 3)->default(0);
            $table->dateTime('fechaHoraRecarga')->nullable();
            $table->boolean('activo')->default(false);
            $table->dateTime('fechaHoraRegistro')->nullable();
            $table->dateTime('fechaHoraBaja')->nullable();
            $table->tinyInteger('idTipoCuenta')->nullable();
            $table->boolean('administrador')->default(false);
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
        Schema::dropIfExists('cuentas');
    }
}
