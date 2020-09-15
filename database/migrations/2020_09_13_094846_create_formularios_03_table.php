<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulario03Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios_03', function (Blueprint $table) {
            $table->bigIncrements('id_formulario_03');

            $table->unsignedBigInteger('id_formulario_02');
            $table->string('codigo',45);
            $table->unsignedBigInteger('id_sub_grupo_contable');

            $table->string('nombre_servicio_material_suministro');
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_unidad_medida');
            $table->decimal('precio_unitario',15,2);
            $table->unsignedBigInteger('id_fuente_financiamiento');

            $table->enum('estado',['ACTIVO','INACTIVO']);
            
            $table->foreign('id_formulario_02')->references('id_formulario_02')->on('formularios_02');
            $table->foreign('id_sub_grupo_contable')->references('id_sub_grupo_contable')->on('sub_grupo_contables'); 
            $table->foreign('id_unidad_medida')->references('id_unidad_medida')->on('unidad_medidas');   
        
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formularios_03');
    }
}
