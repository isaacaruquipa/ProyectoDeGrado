<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidasFuentesFinanciamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas_fuentes_financiamiento', function (Blueprint $table) {
            $table->bigIncrements('id_partida_fuente_financiamiento');
            $table->unsignedBigInteger('id_partida');
            $table->unsignedBigInteger('id_fuente_financiamiento');
            $table->float('monto_partida_fuente_finanaciamiento',20,2);
            $table->enum('estado_partida_fuente_financiamiento',['ACTIVO','INACTIVO']);
  

            $table->foreign('id_partida')->references('id_partida')->on('partidas');
            $table->foreign('id_fuente_financiamiento')->references('id_fuente_financiamiento')->on('fuente_financiamientos');
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
        Schema::dropIfExists('partidas_fuentes_financiamiento');
    }
}
