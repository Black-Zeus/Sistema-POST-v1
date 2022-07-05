<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajas', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idUser')->comment("Id Usuario");
            $table->unsignedBigInteger('idEmpresas')->comment("ID Empresa");
            $table->unsignedBigInteger('idLocal')->comment("Id Locales / Bodega");
            $table->unsignedBigInteger('MontoApertura')->comment("Monto de Apertura");
            $table->unsignedBigInteger('MontoVentas')->comment("Monto de Ventas");
            $table->unsignedBigInteger('MontoDevoluciones')->comment("Monto de Devoluciones");
            $table->unsignedBigInteger('MontoPerdidas')->comment("Monto Perdidas");
            $table->unsignedBigInteger('MontoAjuste')->comment("Monto Ajustes");
            $table->unsignedBigInteger('MontoCajasChicas')->comment("Monto Cajas Chica");
            $table->unsignedBigInteger('MontoCierre')->comment("Monto de Cierre");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idEmpresas', 'Cajas_FK')->references('id')->on('empresas');
            $table->foreign('idLocal', 'Cajas_FK_1')->references('id')->on('locales');
            $table->foreign('idEstado', 'Cajas_FK_2')->references('id')->on('estados');
            $table->foreign('idUser', 'Cajas_FK_3')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cajas');
    }
}
