<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirigeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dirige', function (Blueprint $table) {
            //foreneas
            $table->string("dir_radicado");
            $table->bigInteger("dir_cedula");
            $table->foreign('dir_radicado')->references('radicado')->on('caso');
            $table->foreign('dir_cedula')->references('cedula')->on('users');
            $table->primary(['dir_radicado', 'dir_cedula']);
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
        Schema::dropIfExists('dirige');
    }
}
