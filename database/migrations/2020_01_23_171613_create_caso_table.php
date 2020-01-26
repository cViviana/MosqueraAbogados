<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caso', function (Blueprint $table) {
            $table->string("radicado")->primary();
            $table->enum('estado',['activo', 'cerrado'])->default('activo');
            $table->date("fecha_inicio")->nullable(false);
            $table->string("descripcion",200)->nullable(false);
            $table->date("fecha_fin");

            // llaves foraneas
            // estas dos foreneas a la misma tabla cliente es para poder tener informacion no solo del cliente sino tambien de la persona que
            // demando el cliente
            $table->string('demandado');
            $table->string('demandante');
            $table->foreign('demandado')->references('numero')->on('cliente');
            $table->foreign('demandante')->references('numero')->on('cliente');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caso');
    }
}
