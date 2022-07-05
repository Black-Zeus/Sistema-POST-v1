<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajaschicasdetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajaschicasdetalles', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idCajasChicas')->comment("Id Cajas Chica Chica");
            $table->unsignedBigInteger('idAccionesCajasChicas')->comment("id Acciones Cajas Chica");
            $table->unsignedBigInteger('idTipoCajasChicas')->comment("id Tipo de Cajas Chica");
            $table->unsignedBigInteger('idTipoMovimientosCajas')->comment("Id Tipo de Movimientos de Cajas");
            $table->string('Descripcion')->comment("Descripcion del Registro");
            $table->unsignedBigInteger('Monto')->comment("Monto");
            $table->unsignedBigInteger('idUser')->nullable()->comment("ID User");
            $table->unsignedBigInteger('idLocal')->comment("Id Locales / Bodega");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idCajasChicas', 'CajasChicasDetalles_FK')->references('id')->on('cajaschicas');
            $table->foreign('idAccionesCajasChicas', 'CajasChicasDetalles_FK_1')->references('id')->on('accionescajaschicas');
            $table->foreign('idTipoCajasChicas', 'CajasChicasDetalles_FK_2')->references('id')->on('tipocajaschicas');
            $table->foreign('idTipoMovimientosCajas', 'CajasChicasDetalles_FK_3')->references('id')->on('tipomovimientoscajas');
            $table->foreign('idLocal', 'CajasChicasDetalles_FK_4')->references('id')->on('locales');
            $table->foreign('idEstado', 'CajasChicasDetalles_FK_5')->references('id')->on('estados');
            $table->foreign('idUser', 'CajasChicasDetalles_FK_6')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cajaschicasdetalles');
    }
}
