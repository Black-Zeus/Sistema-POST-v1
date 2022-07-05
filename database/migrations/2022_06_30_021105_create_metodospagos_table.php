<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetodospagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodospagos', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->string('Descripcion')->comment("Descripcion del Registro");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idEstado', 'MetodosPagos_FK')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodospagos');
    }
}
