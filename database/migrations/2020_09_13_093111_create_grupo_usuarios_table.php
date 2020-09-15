<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_grupo_usuario');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_rol');
            $table->timestamp('fecha_asignacion')->useCurrent();
            $table->timestamp('fecha_final_asignacion')->nullable();
            $table->enum('estado',['ACTIVO','INACTIVO']);
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_rol')->references('id_rol')->on('roles');    
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
        Schema::dropIfExists('grupo_usuarios');
    }
}
