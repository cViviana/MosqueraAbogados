<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // toco ponerle una fecha incoherente para que primero se crea os rolles de asi poder unirla a usuario ya de laravel
        Schema::create('roll', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre")->unique()->nullable(false);
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
        Schema::dropIfExists('roll');
    }
}
