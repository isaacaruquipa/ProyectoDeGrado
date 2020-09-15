<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubGruposContablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_grupos_contables', function (Blueprint $table) {
            $table->bigIncrements('id_sub_grupo_contable');
            $table->unsignedBigInteger('id_partida');
            $table->unsignedBigInteger('id_auxiliar_contable');
            $table->string('vida_util_sub_grupo_contable',45);
            $table->enum('estado_sub_grupo_cotable',['ACTIVO','INACTIVO']);
            $table->enum('verificado',['SIN VERIFICAR','VERIFICADO']);
            $table->unsignedBigInteger('id_grupo_usuario');
            $table->timestamp('fecha_sub_grupo')->useCurrent();

            $table->foreign('id_partida')->references('id_partida')->on('partidas');
            $table->foreign('id_auxiliar_contable')->references('id_auxiliar_contable')->on('auxiliares_contables');
            $table->foreign('id_grupo_usuario')->references('id_grupo_usuario')->on('grupo_usuarios');
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
        Schema::dropIfExists('sub_grupos_contables');
    }
}
