<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumeroRecodificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numeros_recodificacion', function (Blueprint $table) {
            $table->bigIncrements('id_numero_recodificacion');
            $table->integer('numero_recodificacion',11);
            $table->enum('estado_numero_recodificacion',['ACTIVO','INACTIVO']);
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
        Schema::dropIfExists('numero_recodificaciones');
    }
}
