<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaSistemaComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_sistema_comentarios', function (Blueprint $table) {
            $table->id();
            $table->integer('idCuenta')->nullable();
            $table->text('comentario')->nullable();
            $table->text('respuesta')->nullable();
            $table->dateTime('fechaHoraComentario')->nullable();
            $table->dateTime('fechaHoraRespuesta')->nullable();
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
        Schema::dropIfExists('cuenta_sistema_comentarios');
    }
}
