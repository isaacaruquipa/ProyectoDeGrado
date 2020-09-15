<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivoItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos_items', function (Blueprint $table) {
            
            $table->bigIncrements('id_activo_item');
            $table->unsignedBigInteger('id_numero_formulario');
            $table->unsignedBigInteger('id_tipo_ingreso');
            $table->unsignedBigInteger('id_fuente_financiamiento')->nullable()->default(null);
            $table->unsignedBigInteger('id_unidad_sede');
            $table->unsignedBigInteger('id_sub_grupo_contable')->nullable()->default(null);
            $table->unsignedBigInteger('id_estado_activo')->nullable()->default(null);
            $table->unsignedBigInteger('id_tipo_activo')->nullable()->default(null);
            $table->unsignedBigInteger('id_gestion')->nullable()->default(null);
            
            $table->timestamp('fecha_activo_item')->useCurrent();
            $table->string('codigo_safe_activo_item',45)->nullable()->default(null);
            $table->enum('unidad',['pieza']);
            $table->string('codogo_vsiaf',45 )->nullable()->default(null);
            $table->enum('estado_ingreso_item',['existente','reciente']);
            $table->unsignedBigInteger('id_auxiliar_contable');
            $table->enum('estado_activo_item',['ACTIVO','INACTIVO']);
            $table->unsignedBigInteger('id_numero_recodificacion')->nullable()->default(null);
            $table->unsignedBigInteger('id_grupo_usuario')->nullable()->default(null);
            $table->unsignedBigInteger('id_gestion_vsiaf')->nullable()->default(null);
            $table->enum('estado_ingreso_activo_item',['actual','recodificacion','nuevo','reposicion','faltante','observado'])->nullable()->default(null);
            $table->string('datos_no_especifico',45)->nullable()->default(null);
            $table->string('gestion_vsiaf_uno',6)->nullable()->default(null);
            $table->string('dependencia_vsiaf',90)->nullable()->default(null); 
            
            
            
            // Claves foraneas 
            $table->foreign('id_numero_formulario')->references('id_numero_formulario')->on('numeros_formularios');
            $table->foreign('id_tipo_ingreso')->references('id_tipo_ingreso')->on('tipo_ingresos');
            $table->foreign('id_fuente_financiamiento')->references('id_fuente_financiamiento')->on('fuente_finanacimientos');
            $table->foreign('id_unidad_sede')->references('id_unidad_sede')->on('unidad_sedes');
            $table->foreign('id_sub_grupo_contable')->references('id_sub_grupo_contable')->on('sub_grupo_contables');
            $table->foreign('id_estado_activo')->references('id_estado_activo')->on('estado_activos');
            $table->foreign('id_tipo_activo')->references('id_tipo_activo')->on('tipo_activos');
            $table->foreign('id_gestion')->references('id_gestion')->on('gestiones');
            
            
            
           $table->foreign('id_numero_recodificacion')->references('id_numero_recodificacion')->on('numero_recodificaciones');
            $table->foreign('id_grupo_usuario')->references('id_grupo_usuario')->on('grupo_usuarios');
           $table->foreign('id_gestion_vsiaf')->references('id_gestion_vsiaf')->on('gestion_vsiaf');
            
            
            
            $table->timestamps();
        });
        
        //'actual','recodificacion','nuevo','reposicion','faltante','observado'
        /*
       Esta la tecnologia del futuro del mas alla ela imaginaciónd e tecnologias de gestiónd proyectos increiblemente profesionales
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activos_items');
    }
}
