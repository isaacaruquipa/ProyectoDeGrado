<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_compra', function (Blueprint $table) {
            $table->bigIncrements('id_orden_compra');
            $table->unsignedInteger('id_numero_formulario');
            $table->unsignedInteger('id_proveedor');
            $table->date('fecha_emision');
            $table->date('fecha_entrega')->nullable()->default(null);
            $table->string('nombre_proyecto_compra',1024);
            $table->unsignedBigInteger('id_unidad_sede_solicitante');
            $table->integer('nro_cotizacion',11);
            $table->string('nro_hr',45);
            $table->unsignedBigInteger('id_asignacion_elaborado_por')->nullable()->default(null); 
            
            $table->string('plazo_entrega',200);
            $table->unsignedBigInteger('id_forma_pago');
            $table->string('lugar_entrega',64);
            $table->unsignedBigInteger('id_asignacion_rpa');
            $table->unsignedBigInteger('id_gestion');
            $table->unsignedBigInteger('id_asignacion_jefe_unidad_bienes');
            
            $table->foreign('id_asignacion_rpa')->references('id_asignacion')->on('asignaciones');
            $table->foreign('id_gestion')->references('id_gestion')->on('gestiones');
            $table->foreign('id_asignacion_jefe_unidad_bienes')->references('id_asignacion_jefe_unidad_bienes')->on('jefe_unidad_bienes');
            

          

            
            $table->date('fecha_registro_orden_compra');
            $table->unsignedBigInteger('id_grupo_usuario');
            $table->enum('tipo_orden_compra',['ORDEN DE COMPRA','ORDEN DE SERVICIO','CONTRATO']);
            $table->enum('estado_orden_compra',['ACTIVO','INACTIVO']);
            $table->enum('estado_compra',['no aprobado','aprobado']);
            $table->string('numero_preventivo',45);
            $table->string('numero_fut',45);
            $table->string('fuente_financiamiento',45);
            $table->enum('ingreso_orden_compra',['ORDEN DE COMPRA','ORDEN DE SERVICIO','ORDEN COMPRA ACTIVOS','CONTRATO']);
            $table->string('ubicacion_actual',100);
            $table->unsignedBigInteger('id_numero_compra');
            $table->unsignedBigInteger('id_grupo_usuario_modificador');
           
            
            
            $table->timestamp('fecha_modificacion')->useCurrent();
            $table->enum('codigo_compra',['CM','RUPE','ANPE','LP','EXCEPCION','CONTRATO']);
            $table->string('codigo_sisin',50);
            $table->string('cuce_orden_compra',60);
            $table->string('codigo_contratacion',50);
            $table->timestamp('fecha_confirmacion')->useCurrent();
            $table->enum('tipo_compra_contrato',['NORMAL','CONTRATO']);
            $table->date('fecha_eliminacion');
            $table->foreign('id_numero_formulario')->references('id_numero_formulario')->on('numeros_formularios');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
            $table->foreing('id_unidad_sede_solicitante')->references('id_unidad_sede')->on('unidad_sedes');
            
            
            $table->foreign('id_numero_compra')->references('id_numero_compra')->on('numeros_compra');
            $table->foreign('id_grupo_usuario_modificador')->references('id_grupo_usuario')->on('grupo_usuarios');          
            
            
            

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes_compra');
    }
}
