<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularioEncabezadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_encabezados', function (Blueprint $table) {
            $table->bigIncrements('id_formulario_encabezado');
            $table->string('codigo',45);
            $table->string('sigla',45);
            $table->string('nombre_universidad',100);
            $table->enum('estado',['ACTIVO','INACTIVO']);
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
        Schema::dropIfExists('formulario_encabezados');
    }
}
