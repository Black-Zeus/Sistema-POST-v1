<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->unsignedBigInteger('idEmpresas')->comment("Id Empresa");
            $table->unsignedBigInteger('idLocal')->comment("Id Locales / Bodega");
            $table->unsignedBigInteger('idUser')->comment("Id de Usuarios");
            $table->unsignedBigInteger('idMovimientos')->comment("id Movimientos");
            $table->unsignedBigInteger('idDocumentosTipo')->comment("Id Tipo de Documentos");
            $table->unsignedBigInteger('FolioDocumentos')->comment("Numero de Documento (Folio)");
            $table->unsignedBigInteger('idCliente')->comment("Id Cliente");
            $table->unsignedBigInteger('idContactos')->comment("Id Contactoso Cliente");
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
            
            $table->foreign('idEmpresas', 'Ventas_FK')->references('id')->on('empresas');
            $table->foreign('idLocal', 'Ventas_FK_1')->references('id')->on('locales');
            $table->foreign('idMovimientos', 'Ventas_FK_2')->references('id')->on('movimientos');
            $table->foreign('idDocumentosTipo', 'Ventas_FK_3')->references('id')->on('tipodocumentos');
            $table->foreign('idCliente', 'Ventas_FK_4')->references('id')->on('clientes');
            $table->foreign('idContactos', 'Ventas_FK_5')->references('id')->on('contactosclientes');
            $table->foreign('idEstado', 'Ventas_FK_6')->references('id')->on('estados');
            $table->foreign('idUser', 'Ventas_FK_7')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
