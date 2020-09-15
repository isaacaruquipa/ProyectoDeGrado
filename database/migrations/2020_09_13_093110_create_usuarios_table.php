<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('usuario',128);
            $table->string('contrasena',256);
            $table->enum('estado_usuario',['ACTIVO','INACTIVO']);
            $table->unsignedBigInteger('id_cargo_sistema')->nullable()->default(null);
            $table->unsignedBigInteger('id_unidad_sede')->nullable()->default(null);
            $table->string('preparacion_profesional',40);
            $table->timestamps();
            

            $table->foreign('id_cargo_sistema')->references('id_cargo_sistema')->on('cargo_sistema');
            $table->foreign('id_unidad_sede')->references('id_unidad_sede')->on('unidad_sedes');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
