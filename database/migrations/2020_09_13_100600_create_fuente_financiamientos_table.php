<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuenteFinanciamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuente_financiamientos', function (Blueprint $table) {
            $table->bigIncrements('id_fuente_financiamiento');
            $table->string('nombre_fuente_financiamiento',512);
            $table->string('codigo_fuente_financiamiento',45);
            $table->string('inicial_fuente_financiamiento',45)->nullable()->default(null);
            $table->string('sigla_fuente_financiamiento',64)->nullable()->default(null);
            $table->enum('estado_fuente_financiamiento',['ACTIVO','DESACTIVO']);
            $table->unsignedBigInteger('id_recurso');
            $table->enum('estado_financiamiento_poa',['SAFE','ENPSILION']);

            $table->foreign('id_recurso')->references('id_recurso')->on('recursos');

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
        Schema::dropIfExists('fuente_financiamientos');
    }
}
