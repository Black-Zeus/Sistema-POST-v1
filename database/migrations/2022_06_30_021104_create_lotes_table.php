<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idEmpresas')->comment("Id Empresa");
            $table->unsignedBigInteger('idSubProducto')->comment("id SubProduto");
            $table->string('Ean', 40)->comment("Codigo EAN");
            $table->unsignedBigInteger('Stock')->comment("Stock / Cantidad");
            $table->unsignedBigInteger('StockCritico')->comment("Stock Critico");
            $table->unsignedBigInteger('StockComprometido')->comment("Stock Comprometido");
            $table->unsignedBigInteger('idLocal')->comment("id Locales / Bodega");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idEmpresas', 'Lotes_FK')->references('id')->on('empresas');
            $table->foreign('idSubProducto', 'Lotes_FK_1')->references('id')->on('subproductos');
            $table->foreign('idLocal', 'Lotes_FK_2')->references('id')->on('locales');
            $table->foreign('idEstado', 'Lotes_FK_3')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lotes');
    }
}
