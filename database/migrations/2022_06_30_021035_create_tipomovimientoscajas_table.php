<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipomovimientoscajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipomovimientoscajas', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->string('Descripcion')->comment("Descripcion del Registro");
            $table->unsignedBigInteger('idTipoCajasChicas')->comment("Id Tipo de Cajas");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('id', 'TipoMovimientosCajas_FK')->references('id')->on('tipocajaschicas');
            $table->foreign('idEstado', 'TipoMovimientosCajas_FK_1')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipomovimientoscajas');
    }
}
