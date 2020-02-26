<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento', function (Blueprint $table) {
            $table->bigIncrements('id');
            //ubicacion del documento en el servidor
            $table->string("path",256)->nullable(false);
            $table->string("descripcion",200)->nullable(false);
            //debido a que no se borran los documentos relacionados a un caso se cierran para no poder visualizar
            $table->enum('estado',['activo', 'cerrado'])->default('activo');

            //llaves foreneas !
            //foranea de documento a tipo_documento
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipo_documento');
            //foranea de documento a ubicacion_fisica
            $table->unsignedBigInteger('ubicacion_id');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacion_fisica');
            //foranea a caso
            $table->string('radicado_doc');
            $table->foreign('radicado_doc')->references('radicado')->on('caso');
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
        Schema::dropIfExists('documento');
    }
}
