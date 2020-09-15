<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->bigIncrements('id_asignacion_activo');
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_persona_uno');
            $table->unsignedBigInteger('id_asignacion')->nullable()->default(null);
            $table->unsignedBigInteger('id_asignacion_uno')->nullable()->default(null);
            $table->unsignedBigInteger('id_unidad_sede');
            $table->unsignedBigInteger('id_administrativo_carrera');
            $table->timestamp('fecha_asignacion')->useCurrent();
            $table->unsignedBigInteger('id_gestion');
            $table->string('libro_asignacion',45);
            $table->unsignedBigInteger('id_estado_activo');
            $table->unsignedBigInteger('id_activo_item');
            $table->text('observacion_asignacion');
            $table->string('descripcion_ubicacion_asignacion');
            $table->unsignedBigInteger('id_cite_asignacion');
            $table->unsignedBigInteger('id_grupo_usuario');
            $table->unsignedBigInteger('id_grupo_usuario');
            $table->unsignedBigInteger('id_motivo_cambio');
            $table->unsignedBigInteger('id_cite_reasignacion');
            $table->enum('estado_asignacion',['asignado','reasignado','prestamo','devolucion','faltante','sin pendiente']);
            $table->enum('estado',['ACTIVO','INACTIVO']);
            $table->string('cargo_actual',60)->nullable()->default(null);
            $table->unsignedBigInteger('id_asignacion_docente_estudiante')->nullable()->default(null);
            $table->unsignedBigInteger('id_asignacion_docente_estudiante_uno')->nullable()->default(null);
            $table->timestamp('fecha_registro_asignacion')->useCurrent();
            $table->string('grado_asignacion_persona',20)->nullable()->default(null);
            $table->string('grado_asignacion_persona_uno',20)->nullable()->default(null);

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
        Schema::dropIfExists('asignaciones');
    }
}
