<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_activos', function (Blueprint $table) {
            $table->bigIncrements('id_tipo_activo');
            $table->string('nombre_tipo_activo',45);
            $table->enum('estado_tipo_activo',['ACTIVO','INACTIVO']);
            
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
        Schema::dropIfExists('tipo_activos');
    }
}
