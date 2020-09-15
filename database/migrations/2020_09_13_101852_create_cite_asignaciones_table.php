<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiteAsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cite_asignaciones', function (Blueprint $table) {
            $table->bigIncrements('id_cite_asignacion');
            $table->integer('asignacion_cite',11);
            $table->enum('estado_asignacion_cite',['ACTIVO','INACTIVO']);
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
        Schema::dropIfExists('cite_asignaciones');
    }
}
