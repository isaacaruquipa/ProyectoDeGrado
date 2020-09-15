<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulario02Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios_02', function (Blueprint $table) {
            $table->bigIncrements('id_formulario_02');
            $table->unsignedBigInteger('id_formulario_01');
            $table->string('meta_programada',5);
            $table->string('meta_ejecutada');
            $table->unsignedBigInteger('id_programa_proyecto_actividad');
            $table->enum('tipo',['PROGRAMA','PROYECTO','ACTIVIDAD']);
            $table->string('tarea',256);
            $table->enum('estado',['ACTIVO','INACTIVO']);
            $table->foreign('id_formulario_01')->references('id_formulario_01')->on('formularios_01');
            $table->foreign('id_programa_proyecto_actividad')->references('id_programa_proyecto_actividad')->on('programas_proyectos_actividades');
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
        Schema::dropIfExists('formularios_02');
    }
}
