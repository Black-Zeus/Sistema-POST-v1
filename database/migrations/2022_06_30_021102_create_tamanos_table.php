<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamanos', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->string('Descripcion')->comment("Descripcion del Registro");
            $table->string('Codigo', 5)->comment("Codigo del Tamaño");
            $table->unsignedInteger('Orden')->comment("Orden de Despliegue");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idEstado', 'Tamanos_FK')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tamanos');
    }
}
