<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListapreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listaprecios', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idTipoListaPrecios')->comment("Id Lista de precio");
            $table->string('Descripcion')->comment("Descripcion del Registro");
            $table->dateTime('FechaInicio')->comment("Fecha de inicio");
            $table->dateTime('FechaTermino')->comment("Fecha de Termino");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idEstado', 'ListaPrecios_FK')->references('id')->on('estados');
            $table->foreign('idTipoListaPrecios', 'ListaPrecios_FK_1')->references('id')->on('tipolistaprecios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listaprecios');
    }
}
