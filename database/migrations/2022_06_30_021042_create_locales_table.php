<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locales', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idEmpresas')->comment("Id Empresa");
            $table->string('Descripcion')->comment("Descripcion del Registro");
            $table->unsignedBigInteger('idPaises')->comment("Id Paises");
            $table->unsignedBigInteger('idCiudades')->comment("Id Ciudades");
            $table->string('Direccion')->comment("Direccion Locales / Bodega");
            $table->string('Email')->comment("Correo Electronico");
            $table->string('Fono', 20)->nullable()->comment("Numero de telefono");
            $table->string('Anexo', 10)->nullable()->comment("Anexo");
            $table->unsignedBigInteger('idEncargados')->comment("Id Encargados");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");
            $table->unsignedBigInteger('idTipoLocales')->comment("ID Tipo de Locales / Bodega");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idCiudades', 'Locales_FK')->references('id')->on('ciudades');
            $table->foreign('idPaises', 'Locales_FK_1')->references('id')->on('paises');
            $table->foreign('idEmpresas', 'Locales_FK_2')->references('id')->on('empresas');
            $table->foreign('idTipoLocales', 'Locales_FK_3')->references('id')->on('tipolocales');
            $table->foreign('idEstado', 'Locales_FK_4')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locales');
    }
}
