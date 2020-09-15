<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramasProyectosActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas_proyectos_actividades', function (Blueprint $table) {
            $table->bigIncrements('id_programa_proyecto_actividad');
            $table->bigInteger('id_meta');
            $table->string('nombre_programa_proyecto_actividad_estrategica');
            $table->bigInteger('id_grupo_usuario');
            $table->timestamp('fecha_registro')->useCurrent();
            $table->enum('estado_programa_proyecto_actividad',['ANTERIOR','RECIENTE']);
            $table->enum('estado',['ACTIVO','INACTIVO']);
            $table->timestamps();
            $table->foreign('id_grupo_usuario')->references('id_grupo_usuario')->on('grupo_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programas_proyectos_actividades');
    }
}
