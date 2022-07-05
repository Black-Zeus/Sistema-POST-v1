<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListapreciodetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listapreciodetalles', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idListaPrecio')->comment("Id Lista de precio");
            $table->unsignedBigInteger('idLotes')->comment("Id Lote");
            $table->string('Ean', 20)->comment("Codigo EAN");
            $table->unsignedBigInteger('Monto')->comment("Valor Producto");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idListaPrecio', 'ListaPrecioDetalles_FK')->references('id')->on('listaprecios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listapreciodetalles');
    }
}
