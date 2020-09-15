<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivoCaracteristicaGrupoContableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activo_caracteristica_grupo_contable', function (Blueprint $table) {
            $table->bigIncrements('id_activo_caracteristica_grupo_contable');
            $table->unsignedBigInteger('id_activo_item');
            $table->unsignedBigInteger('id_caracteristica_grupo_contable');
            $table->text('descripcion_activo_caracteristica');
            $table->enum('estado_activo_caracteristica',['ACTIVO','INACTIVO']);
            $table->foreign('id_activo_item')->references('id_activo_item')->on('activos_items');
            $table->foreign('id_caracteristica_activo_grupo_contable')->references('id_caracteristica_activo_grupo_contable')->on('caracteristicas_grupo_contable');
            
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
        Schema::dropIfExists('activo_caracteristica_grupo_contable');
    }
}
