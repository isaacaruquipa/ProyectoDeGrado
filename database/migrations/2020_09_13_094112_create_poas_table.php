<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poas', function (Blueprint $table) {
            $table->bigIncrements('id_poa');
            $table->unsignedBigInteger('id_gestion');
            $table->unsignedBigInteger('id_tipo_poa');
            $table->date('fecha_inicio_poa');
            $table->date('fecha_final_poa');
            $table->timestamp('fecha_registro_poa')->useCurrent();
            $table->enum('estado',['ACTIVO','INACTIVO']);
            $table->foreign('id_gestion')->references('id_gestion')->on('gestiones');
            $table->foreign('id_tipo_poa')->references('id_tipo_poa')->on('tipo_poa');
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
        Schema::dropIfExists('poa');
    }
}
