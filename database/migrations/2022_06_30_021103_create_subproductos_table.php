<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subproductos', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idProductos')->comment("id Productos");
            $table->string('Descripcion')->comment("Descripcion del Registro");
            $table->unsignedBigInteger('idGrupo')->comment("id Grupo");
            $table->unsignedBigInteger('idSubGrupo')->comment("id SubGrupo");
            $table->unsignedBigInteger('idTamano')->comment("id Talla");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idProductos', 'SubProductos_FK')->references('id')->on('productos');
            $table->foreign('idGrupo', 'SubProductos_FK_1')->references('id')->on('grupos');
            $table->foreign('idSubGrupo', 'SubProductos_FK_2')->references('id')->on('subgrupos');
            $table->foreign('idTamano', 'SubProductos_FK_3')->references('id')->on('tamanos');
            $table->foreign('idEstado', 'SubProductos_FK_4')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subproductos');
    }
}
