<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->id()->comment("Correlativo");
            $table->string('Descripcion')->comment("Descripcion del Registro");
            $table->string('Modulo', 50)->comment("Nombre del modulo que empleara el permiso");            

            //Habilitacion de Fecha Creacion / Eliminacion
            $table->timestamps();

            //Habilitacion de SoftDelete
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
