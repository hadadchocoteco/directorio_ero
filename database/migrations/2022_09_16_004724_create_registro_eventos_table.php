<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_eventos', function (Blueprint $table) {
            $table->id();
            $table->char('evento', 250)->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('idCuentaEvento')->nullable();
            $table->dateTime('fechaHoraEvento')->nullable();
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
        Schema::dropIfExists('registro_eventos');
    }
}
