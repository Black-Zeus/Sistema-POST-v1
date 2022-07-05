<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagosventas', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idVentas')->comment("Id Venta");
            $table->unsignedBigInteger('idMetodosPagos')->comment("Id Medio de pago");
            $table->string('CodigoRegistro', 20)->comment("Codigo de Registro");
            $table->unsignedBigInteger('TotalVentas')->comment("Total venta");
            $table->unsignedBigInteger('MontoTemporal')->comment("Monto Temporal");
            $table->unsignedBigInteger('SaldoVentas')->comment("Saldo de Venta");
            $table->unsignedBigInteger('idEstado')->default(1)->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idVentas', 'PagosVentas_FK')->references('id')->on('ventas');
            $table->foreign('idEstado', 'PagosVentas_FK_2')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagosventas');
    }
}
