<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->bigIncrements('id_permiso');
            $table->bigInteger('id_submenu');
            $table->bigInteger('id_rol');
            $table->enum('epsilion_leer',['SI','NO']);
            $table->enum('epsilion_insertar',['SI','NO']);
            $table->enum('epsilion_actualizar',['SI','NO']);
            $table->enum('epsilion_eliminar',['SI','NO']);
            $table->enum('epsilion_ver_formularios',['SI','NO']);
            $table->enum('estado',['ACTIVO','INACTIVO']);
            $table->foreign('id_submenu')->references('id_submenu')->on('submenus');
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
        Schema::dropIfExists('permisos');
    }
}
