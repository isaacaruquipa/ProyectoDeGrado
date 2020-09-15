<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInicialesUnidadesSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciales_unidad_sedes', function (Blueprint $table) {
        $table->bigIncrements('id_inicial_unidad_sede');
        $table->unsignedInteger('id_unidad_sede');
        $table->string('inicial_unidad_sede',45);
        $table->enum('estado_inicial_unidad_sede',['ACTIVO','INACTIVO']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iniciales_unidades_sedes');
    }
}
