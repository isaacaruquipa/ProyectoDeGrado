<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->bigIncrements('id_partida');
            $table->integer('numero_partida');
            $table->string('detalle_partida',1024);
            $table->string('inicial_partida',45)->nullable()->default(null);
            $table->enum('verificado',['SIN VERIFICAR','VERIFICADO']);
            $table->enum('estado',['ACTIVO','INACTIVO']);
     
            $table->unsignedBigInteger('id_grupo_usuario')->nullable()->default(null);
            $table->timestamp('fecha_registro_partida')->useCurrent();

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
        Schema::dropIfExists('portidas');
    }
}
