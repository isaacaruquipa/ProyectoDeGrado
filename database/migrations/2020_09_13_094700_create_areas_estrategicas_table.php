<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasEstrategicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_estrategicas', function (Blueprint $table) {
            $table->bigIncrements('id_area_estrategica');
            $table->string('nombre_area_estrategica',512);
            $table->integer('nro_area_estrategica',11);
            $table->unsignedBigInteger('id_pedi');
            $table->enum('estado',['ACTIVO','INACTIVO']);
            $table->foreign('id_pedi')->references('id_pedi')->on('pedi');
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
        Schema::dropIfExists('areas_estrategicas');
    }
}
