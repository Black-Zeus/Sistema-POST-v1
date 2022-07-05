<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosdetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientosdetalles', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idMovimientos')->comment("Id Movimiento");
            $table->unsignedBigInteger('idLotes')->comment("id Lote");
            $table->string('Ean', 20)->comment("Codigo EAN");
            $table->unsignedBigInteger('idProductos')->comment("Id Producto");
            $table->unsignedBigInteger('idListaPrecio')->comment("Id Lista de Precio");
            $table->decimal('FactorDescuentoLista', 10, 0)->comment("Factor / Porcentaje Descuento Lista");
            $table->unsignedBigInteger('CantidadProductos')->comment("Cantidad de Productos");
            $table->unsignedBigInteger('DescuentoAdicional')->comment("Descuento Adicional");
            $table->unsignedBigInteger('MontoNeto')->comment("Monto neto");
            $table->unsignedBigInteger('MontoImpuestos')->comment("Monto Impuesto");
            $table->unsignedBigInteger('MontoTotal')->comment("Monto Total");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idMovimientos', 'MovimientosDetalles_FK')->references('id')->on('movimientos');
            $table->foreign('idLotes', 'MovimientosDetalles_FK_1')->references('id')->on('lotes');
            $table->foreign('idEstado', 'MovimientosDetalles_FK_2')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientosdetalles');
    }
}
