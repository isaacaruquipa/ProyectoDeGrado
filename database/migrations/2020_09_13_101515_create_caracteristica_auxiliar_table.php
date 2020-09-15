<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaracteristicaAuxiliarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristica_auxiliar', function (Blueprint $table) {
            $table->bigIncrements('id_caracteristica_auxiliar');
            $table->unsignedBigInteger('id_auxiliar_contable');
            $table->string('nombre_caracteristica_auxiliar',45);
            $table->enum('estado_caracteristica_auxiliar',['ACTIVO','INACTIVO']);
            
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
        Schema::dropIfExists('caracteristica_auxiliar');
    }
}
