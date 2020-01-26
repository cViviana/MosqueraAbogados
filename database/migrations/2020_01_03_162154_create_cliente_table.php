<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            //tiene de nombre numero porque si es una persona natural es la cedula pero si es un empresa es un nit
            $table->string('numero')->primary();
            $table->string("nombre" , 50)->nullable(false);
            //roll e va  usar para saber si es demandado  o DEMANDANTE
            //$table->string("roll",50)->nullable(false);
            // este atributo es para saber si es una persona natural o un empresa
            $table->string("tipo",50)->nullable(false);
            $table->string("telefono",20)->nullable(false);
            $table->string("email",50)->nullable(false)->unique();
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
        Schema::dropIfExists('cliente');
    }
}
