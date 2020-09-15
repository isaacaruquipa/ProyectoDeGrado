<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidaOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salida_ordenes', function (Blueprint $table) {
            $table->bigIncrements('id_salida_orden');
            $table->string('fecha_salida_orden',45);
            $table->string('fecha_registro',45);
            $table->string('observacion_salida',100);
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_asignacion')->nullable()->default(null);
            $table->string('grado_asignacion',50)->nullable()->default(null);
            $table->unsignedBigInteger('id_asignacion_docente_estudiante')->nullable()->default(null);
            $table->unsignedBigInteger('id_orden_compra');
            $table->unsignedBigInteger('id_grupo_usuario');
            $table->enum('estado_salida',['ACTIVO','INACTIVO']);
            
            //CLAVES
            $table->foreign('id_persona')->references('id_persona')->on('personas');
            $table->foreign('id_asignacion')->references('id_asignacion')->on('asignaciones');
            $table->foreign('id_asignacion_docente_estudiante')->references('id_asignacion_docente_estudiante')->on('asignacion_docente_estudiante');
            $table->foreign('id_orden_compra')->references('id_orden_compra')->on('ordenes_compra');
            $table->foreign('id_grupo_usuario')->references('id_grupo_usuario')->on('grupo_usuarios');


            $table->enum('confirmar_salida_compra',['ENTREGADO','PENDIENTE','OBSERVADO'])->nullable()->default(null);
            $table->unsignedBigInteger('id_numero_compra');
            $table->string('cargo_actual_salida',100);
            $table->unsignedBigInteger('id_asignacion_bienes')->nullable()->default(null);
            $table->string('cargo_actual_bienes',100)->nullable()->default(null);
            $table->string('grado_bienes',60)->nullable()->default(null);
            $table->unsignedBigInteger('id_asignacion_rpa')->nullable()->default(null);
            $table->string('cargo_actual_rpa',100)->nullable()->default(null);
            $table->string('grado_rpa',60);
            $table->string('serial_equipos',1000)->nullable()->default();
            $table->unsignedBigInteger('id_asignacion_activos');
// CLAVES FORANEAS
            $table->foreign('id_numero_compra')->references('id_numero_compra')->on('numeros_compra');
            $table->foreign('id_asignacion_bienes')->references('id_asignacion_bienes')->on('asignaciones');
            //$table->foreign('id_asignacion_rpa')->references('id_asignacion_rpa')->on('asignaciones_rpa');
            //$table->foreign('id_asignacion_activos')->references('id_asignacion_activos')->on('asignaciones_activos');

            $table->string('cargo_actual_activos',100);
            $table->string('grado_activo',60);
            $table->string('numero_informe',80)->nullable()->default(null);
            $table->enum('tipo_compra',['CM','ANPE','RUPE','LP']);
            $table->string('numero_cuce',80)->nullable()->default(null);
            $table->date('fecha_empresa');
            $table->string('codigo_anpe',100);
            $table->enum('codigo_variable',['','A','B','C']);


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
        Schema::dropIfExists('salida_ordenes');
    }
}
