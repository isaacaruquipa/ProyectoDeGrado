<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacenes', function (Blueprint $table) {
            $table->bigIncrements('id_almacen');
            $table->unsignedBigInteger('id_orden_compra');
            $table->unsignedBigInteger('id_numero_compra');
            $table->date('fecha_entrega')->nullable()->nullable();
            $table->string('serie',12)->nullable();
            $table->enum('estado_almacen',['ACTIVO','INACTIVO']);
            $table->unsignedBigInteger('id_grupo_usuario');


            $table->foreign('id_orden_compra')->references('id_orden_compra')->on('ordenes_compra');
            $table->foreign('id_numero_compra')->references('id_numero_compra')->on('numero_compra');
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
        Schema::dropIfExists('almacenes');
    }
}
