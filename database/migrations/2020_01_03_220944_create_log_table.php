<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->dateTime("fecha")->timestamp()->primary();
            $table->string("accion")->nullable(false);
            $table->string("estadoAnterior")->nullable(false);
            $table->string("estadoNuevo")->nullable(false);

            //llaves foraneas
            //foranea de log a documento
            $table->unsignedBigInteger('id_documento');
            $table->foreign('id_documento')->references('id')->on('documento');
            //foranea  de usuario  a log
            $table->BigInteger('use_cedula');
            $table->foreign('use_cedula')->references('cedula')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log');
    }
}
