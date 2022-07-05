<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosproveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactosproveedores', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idProveedor')->comment("Id de Proveedor");
            $table->unsignedBigInteger('idEncargados')->comment("Id Cargo");
            $table->string('Nombre')->comment("Nombre Proveedor");
            $table->unsignedBigInteger('idPaises')->comment("id Paises");
            $table->unsignedBigInteger('idCiudades')->comment("id Ciudades");
            $table->string('Direccion')->comment("Direccion");
            $table->string('Email')->comment("Correo Electronico");
            $table->string('Fono', 20)->nullable()->comment("Numero de Telefono");
            $table->string('Anexo', 10)->comment("Anexo");
            $table->unsignedBigInteger('idEstado')->default(1);            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idProveedor', 'ContactosProveedores_FK')->references('id')->on('proveedores');
            $table->foreign('idEncargados', 'ContactosProveedores_FK_1')->references('id')->on('encargados');
            $table->foreign('idCiudades', 'ContactosProveedores_FK_2')->references('id')->on('ciudades');
            $table->foreign('idPaises', 'ContactosProveedores_FK_3')->references('id')->on('paises');
            $table->foreign('idEstado', 'ContactosProveedores_FK_4')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactosproveedores');
    }
}
