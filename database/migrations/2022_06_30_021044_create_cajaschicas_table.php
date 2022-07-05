<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajaschicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajaschicas', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idUser')->comment("Id User");
            $table->unsignedBigInteger('idEmpresas')->comment("id Empresa");
            $table->unsignedBigInteger('idLocal')->comment("Id Locales / Bodega");
            $table->unsignedBigInteger('MontoEfectivo')->comment("Monto Cajas Chica");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idEmpresas', 'CajasChicas_FK')->references('id')->on('empresas');
            $table->foreign('idLocal', 'CajasChicas_FK_1')->references('id')->on('locales');
            $table->foreign('idEstado', 'CajasChicas_FK_2')->references('id')->on('estados');
            $table->foreign('idUser', 'CajasChicas_FK_3')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cajaschicas');
    }
}
