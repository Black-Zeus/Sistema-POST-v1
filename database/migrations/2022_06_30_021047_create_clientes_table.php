<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->string('Rut', 12)->comment("Rut del Cliente");
            $table->string('RazonSocial')->comment("Razon Social");
            $table->string('NombreFantasia')->comment("Nombre de fantasia");
            $table->unsignedBigInteger('idPaises')->comment("Id Paises");
            $table->unsignedBigInteger('idCiudades')->comment("Id Ciudades");
            $table->string('Direccion')->comment("Direccion");
            $table->unsignedBigInteger('idClientesTipos')->comment("Id Tipo de Clientes");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idPaises', 'Clientes_FK')->references('id')->on('paises');
            $table->foreign('idCiudades', 'Clientes_FK_1')->references('id')->on('ciudades');
            $table->foreign('idClientesTipos', 'Clientes_FK_2')->references('id')->on('clientestipos');
            $table->foreign('idEstado', 'Clientes_FK_3')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}