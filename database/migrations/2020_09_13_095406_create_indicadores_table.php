<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores', function (Blueprint $table) {
            $table->bigIncrements('id_indicador');
            $table->bigInteger('id_objetivo_estrategico');
            $table->string('codigo_indicador',15);
            $table->string('descripcion_indicador');
            $table->enum('estado',['ACTIVO','INACTIVO']);
            $table->foreign('id_objetivo_estrategico')->references('id_objetivo_estrategico')->on('objetivos_estrategicos');
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
        Schema::dropIfExists('indicadores');
    }
}
