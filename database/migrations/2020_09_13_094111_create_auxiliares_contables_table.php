<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuxiliaresContablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliares_contables', function (Blueprint $table) {
            $table->bigIncrements('id_auxiliar_contable');
            $table->string('nombre_auxiliar_contable',60);
            $table->string('codigo_auxiliar_contable',45);
            $table->enum('grupo_auxiliar_contable',['unico','combo']);
            $table->enum('estado_auxiliar_contable',['ACTIVO','INACTIVO']);
            $table->enum('tipo',['EXTERNO','INTERNO']);
            $table->enum('tipo_auxiliar',['FUNGIBLE','NO_FUNGIBLE']);
            $table->unsignedBigInteger('id_grupo_usuario');
            $table->timestamp('fecha_registro_auxiliar')->useCurrent();
            
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
        Schema::dropIfExists('auxiliares_contables');
    }
}
