<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativosCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admionistrativos_carreras', function (Blueprint $table) {
            $table->bigIncrements('id_administrativo_carrera');
            $table->string('nombre_administrativo_carrera',1024);
            $table->string('codigo_administrativo_carreracol',45);
            $table->enum('estado',['ACTIVO','INACTIVO']);
            $table->enum('estado_safi',['SAFE','EPSILION']);
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
        Schema::dropIfExists('admionistrativos_carreras');
    }
}
