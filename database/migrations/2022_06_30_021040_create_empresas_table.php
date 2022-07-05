<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->string('Descripcion')->comment("Descripcion del Registro");
            $table->unsignedBigInteger('idPaises')->comment("Id Paises");
            $table->unsignedBigInteger('idCiudades')->comment("Id Ciudades");
            $table->string('Direccion')->comment("Direccion de la Empresa");
            $table->string('Email')->comment("Correo Electronico");
            $table->string('Fono', 20)->nullable()->comment("Numero de Telefono");
            $table->string('Anexo', 10)->nullable()->comment("Anexo");
            $table->unsignedBigInteger('idEncargados')->comment("Id Encargados");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estadoss");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idCiudades', 'Empresas_FK')->references('id')->on('ciudades');
            $table->foreign('idPaises', 'Empresas_FK_1')->references('id')->on('paises');
            $table->foreign('idEstado', 'Empresas_FK_2')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
