<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bajas', function (Blueprint $table) {
            $table->bigIncrements('id_baja');
            $table->unsignedBigInteger('id_activo_item');
            $table->string('motivo_baja');
            $table->text('descripcion_baja');
            $table->enum('estado_baja',['ACTIVO','INACTIVO']);
            $table->foreign('id_activo_item')->references('id_activo_item')->on('activo_items');
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
        Schema::dropIfExists('bajas');
    }
}
