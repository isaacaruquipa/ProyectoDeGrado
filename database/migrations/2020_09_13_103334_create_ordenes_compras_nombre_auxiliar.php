<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesComprasNombreAuxiliar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_compras_nombre_auxiliar', function (Blueprint $table) {
            $table->bigIncrements('id_orden_compra_nombre_auxiliar');
            $table->unsignedBigInteger('id_orden_compra');
            $table->unsignedBigInteger('id_auxiliar_contable');
            $table->unsignedBigInteger('id_unidad_medida');
            $table->float('cantidad');
            $table->decimal('precio_unitario',12,6);
            $table->longText('descripcion_general');
            $table->enum('estado',['ACTIVO','INACTIVO']);

            // CLAVES FORANEAS
            $table->foreign('id_orden_compra')->references('id_orden_compra')->on('ordenes_compra');
            $table->foreign('id_auxiliar_contable')->references('id_auxiliar_contable')->on('auxiliares_contables');
            $table->foreign('id_unidad_medida')->references('id_unidad_medida')->on('unidad_medidas');
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes_compras_nombre_auxiliar');
    }
}
