<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactosclientes', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary()->comment("Correlativo");
            $table->unsignedBigInteger('idClientes')->comment("Id de Clliente");
            $table->unsignedBigInteger('idEncargados')->comment("Id Cargo");
            $table->string('Nombre')->comment("Nombre Cliente");
            $table->unsignedBigInteger('idPaises')->comment("id Paises");
            $table->unsignedBigInteger('idCiudades')->comment("id Ciudades");
            $table->string('Direccion')->comment("Direccion");
            $table->string('Email')->comment("Correo Electronico");
            $table->string('Fono', 20)->comment("Numero de Telefono");
            $table->string('Anexo', 10)->nullable();
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idClientes', 'ContactosClientes_FK')->references('id')->on('clientes');
            $table->foreign('idEncargados', 'ContactosClientes_FK_1')->references('id')->on('encargados');
            $table->foreign('idPaises', 'ContactosClientes_FK_2')->references('id')->on('paises');
            $table->foreign('idCiudades', 'ContactosClientes_FK_3')->references('id')->on('ciudades');
            $table->foreign('idEstado', 'ContactosClientes_FK_4')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactosclientes');
    }
}
