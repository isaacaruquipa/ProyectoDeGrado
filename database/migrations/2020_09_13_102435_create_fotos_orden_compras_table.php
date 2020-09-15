<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosOrdenComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos_orden_compras', function (Blueprint $table) {
            $table->bigIncrements('id_foto_orden_compra');
            $table->string('imagen_foto_orden_compra',45);
            $table->unsignedInteger('id_orden_compra_auxiliar');
            $table->foreign('id_orden_compra_auxiliar')->references('id_orden_compra_auxiliar')->on('ordenes_compras_nombre_auxiliar');
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
        Schema::dropIfExists('fotos_orden_compras');
    }
}
