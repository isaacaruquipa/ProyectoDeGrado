<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetivosEstrategicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivos_estrategicos', function (Blueprint $table) {
            $table->bigIncrements('id_objetivo_estrategico');
            $table->string('descripcion_objetivo_estrategico',1024);
            $table->string('nro_objetivo_estrategico',5);
            $table->bigInteger('id_politica_estrategica');
            $table->string('codigo_objetivo_estrategico',10);
            $table->enum('estado',['ACTIVO','INACTIVO']);

            $table->foreign('id_politica_estrategica')->references('id_politica_estrategica')->on('politicas_estrategicas');
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
        Schema::dropIfExists('objetivos_estrategicos');
    }
}
