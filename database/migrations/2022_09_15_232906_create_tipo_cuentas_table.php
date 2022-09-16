<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_cuentas', function (Blueprint $table) {
            $table->id();
            $table->char('tipo', 80)->nullable();
            $table->decimal('costoPerfil', 12, 3)->nullable();
            $table->decimal('costoExperiencia', 12, 3)->nullable();
            $table->integer('creditoPagoPerfil')->nullable();
            $table->integer('creditoPagoExperiencia')->nullable();
            $table->decimal('descuento', 12 ,3)->nullable();
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
        Schema::dropIfExists('tipo_cuentas');
    }
}
