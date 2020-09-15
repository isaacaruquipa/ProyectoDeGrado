<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulario01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios_01', function (Blueprint $table) {
            $table->bigIncrements('id_formulario_01');
            $table->unsignedBigInteger('id_formulario_responsable_informacion');
            $table->unsignedBigInteger('id_area_estrategica');
            $table->string('codigo',45);
            $table->decimal('monto_total',15,2);
            $table->enum('estado',['ACTIVO','INACTIVO']);   

            $table->unsignedBigInteger('id_formulario_responsable_informacion')->references('id_formulario_responsable_informacion')->on('formulario_responsable_informacion');        
            $table->unsignedBigInteger('id_area_estrategica')->references('id_area_estrategica')->on('areas_estrategicas');
            
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
        Schema::dropIfExists('formulario_01');
    }
}
