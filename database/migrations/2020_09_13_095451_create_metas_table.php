<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->bigIncrements('id_meta');
            $table->string('codigo_meta',15);
            $table->string('descripcion_meta',1024);
            $table->string('cumplimiento_meta_1',4);
            $table->string('cumplimiento_meta_2',4)->nullable();
            $table->string('cumplimiento_meta_3',4)->nullable();
            $table->string('cumplimiento_meta_4',4)->nullable();
            $table->string('cumplimiento_meta_5',4)->nullable();
            $table->bigInteger('id_indicador');
            $table->foreign('id_indicador')->references('id_indicador')->on('indicadores');
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
        Schema::dropIfExists('metas');
    }
}
