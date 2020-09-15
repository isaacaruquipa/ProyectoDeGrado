<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliticasEstrategicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('politicas_estrategicas', function (Blueprint $table) {
            $table->bigIncrements('id_politica_estrategica');
            $table->string('descripcion_politica',2048);
            $table->unsignedBigInteger('id_politica');
            $table->unsignedBigInteger('id_area_estrategica');
            $table->enum('estado',['ACTIVO','INACTIVO']);

            $table->foreign('id_politica')->references('id_politica')->on('politicas');
            $table->foreign('id_area_estrategica')->references('id_area_estrategica')->on('areas_estrategicas');
            
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
        Schema::dropIfExists('politicas_estrategicas');
    }
}
