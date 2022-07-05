<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorizacionescajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorizacionescajas', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idUser')->comment("Id Users");
            $table->unsignedBigInteger('idCajasChicasDetalles')->comment("Id Cajas");
            $table->string('Descripcion')->comment("Descripcion del Registro");
            $table->unsignedBigInteger('idTipoMovimientosCajas')->comment("Id Tipo de Movimiento de Cajas");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idTipoMovimientosCajas', 'AutorizacionesCajas_FK')->references('id')->on('tipomovimientoscajas');
            $table->foreign('idEstado', 'AutorizacionesCajas_FK_1')->references('id')->on('estados');
            $table->foreign('idUser', 'AutorizacionesCajas_FK_2')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autorizacionescajas');
    }
}
