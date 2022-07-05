<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->string('Rut', 14)->comment("Rut del Proveedor");
            $table->string('RazonSocial')->comment("Razon Social");
            $table->string('NombreFantasia')->comment("Nombde de fantasia");
            $table->unsignedBigInteger('idPaises')->comment("Id Paises");
            $table->unsignedBigInteger('idCiudades')->comment("Id Ciudades");
            $table->string('Direccion')->comment("Direccion");
            $table->unsignedBigInteger('idTiposProveedores')->comment("Id Tipo de Clientes");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idPaises', 'Proveedores_FK')->references('id')->on('paises');
            $table->foreign('idCiudades', 'Proveedores_FK_1')->references('id')->on('ciudades');
            $table->foreign('idTiposProveedores', 'Proveedores_FK_2')->references('id')->on('tiposproveedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
