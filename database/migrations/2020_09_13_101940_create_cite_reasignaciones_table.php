<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiteReasignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cite_reasignaciones', function (Blueprint $table) {
            $table->bigIncrements('id_cite_reasignacion');
            $table->integer('cite_reasignacion',11);
            $table->enum('estado_cite_reasignacion',['ACTIVO','INACTIVO']);
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
        Schema::dropIfExists('cite_reasoignaciones');
    }
}
