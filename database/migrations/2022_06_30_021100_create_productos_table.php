<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idEmpresas')->comment("ID empresa");
            $table->string('Descripcion')->comment("Descripcion del Registro");
            $table->unsignedBigInteger('idFamilias')->comment("id Familia");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("id Estados");
            $table->unsignedBigInteger('StockCritico')->comment("Stock Critico");
            $table->unsignedBigInteger('StockComprometido')->comment("Stock Comprometido");
            $table->unsignedBigInteger('idImpuestos')->comment("Id Impuesto");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idEmpresas', 'Productos_FK')->references('id')->on('empresas');
            $table->foreign('idEstado', 'Productos_FK_1')->references('id')->on('estados');
            $table->foreign('idImpuestos', 'Productos_FK_2')->references('id')->on('impuestos');
            $table->foreign('idFamilias', 'Productos_FK_3')->references('id')->on('familias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
