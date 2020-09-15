<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaracteristicasGruposContablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas_grupos_contables', function (Blueprint $table) {
            $table->bigIncrements('id_caracteristica_grupo_contable');
            $table->unsignedBigInteger('id_sub_grupo_contable');
            $table->unsignedBigInteger('id_caracteristica');
            $table->enum('estado_caracteristica_grupo_contable',['ACTIVO','INACTIVO']);
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
        Schema::dropIfExists('caracteristicas_grupos_contables');
    }
}
