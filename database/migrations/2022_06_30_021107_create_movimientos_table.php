<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idEmpresas')->comment("Id Empresa");
            $table->unsignedBigInteger('idTipoMovimientos')->comment("Id Tipo de Movimiento");
            $table->unsignedBigInteger('idLocalOrigen')->comment("Id Locales / Bodega Origen");
            $table->unsignedBigInteger('idLocalDestino')->comment("Id Locales / Bodega Destino");
            $table->unsignedBigInteger('idDocumentosTipo')->comment("Id Tipo de Documentos");
            $table->unsignedBigInteger('FolioDocumentos')->comment("Folio Documento");
            $table->unsignedBigInteger('CantidadProductos')->comment("Cantidad de Productos");
            $table->double('DescuentoAdicional')->comment("Descuento Adicional");
            $table->unsignedBigInteger('MontoNeto')->comment("Monto neto");
            $table->unsignedBigInteger('MontoImpuestos')->comment("Monto Impuesto");
            $table->unsignedBigInteger('MontoTotal')->comment("Monto Total");
            $table->unsignedBigInteger('idCliente')->comment("Id Cliente");
            $table->unsignedBigInteger('idContactos')->comment("Id Contactoso Cliente");
            $table->unsignedBigInteger('idEstado')->default(1)->nullable()->comment("Id Estados");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
            
            $table->foreign('idEmpresas', 'Movimientos_FK')->references('id')->on('empresas');
            $table->foreign('idTipoMovimientos', 'Movimientos_FK_1')->references('id')->on('tiposmovimientos');
            $table->foreign('idLocalOrigen', 'Movimientos_FK_2')->references('id')->on('locales');
            $table->foreign('idLocalDestino', 'Movimientos_FK_3')->references('id')->on('locales');
            $table->foreign('idDocumentosTipo', 'Movimientos_FK_4')->references('id')->on('tipodocumentos');
            $table->foreign('idCliente', 'Movimientos_FK_5')->references('id')->on('clientes');
            $table->foreign('idContactos', 'Movimientos_FK_6')->references('id')->on('contactosclientes');
            $table->foreign('idEstado', 'Movimientos_FK_7')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
