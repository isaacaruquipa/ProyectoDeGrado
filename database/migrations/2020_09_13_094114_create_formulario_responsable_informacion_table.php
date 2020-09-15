<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularioResponsableInformacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_responsable_informacion', function (Blueprint $table) {
            $table->bigIncrements('id_f_responsable_informacion');
            $table->unsignedBigInteger('id_formulario_encabezado');
            $table->unsignedBigInteger('id_poa');
            $table->unsignedBigInteger('id_unidad_sede');
            $table->string('responsable',128);
            $table->unsignedBigInteger('id_grupo_usuario_elaborado_por');
            $table->enum('visto_bueno',['SI','NO']);
            $table->enum('estado',['ACTIVO','INACTIVO']);            
            $table->foreign('id_formulario_encabezado')->references('id_formulario_encabezado')->on('formulario_encabezados');
            $table->foreign('id_poa')->references('id_poa')->on('poas');
            $table->foreign('id_unidad_sede')->references('id_unidad_sede')->on('unidad_sedes');
            $table->foreign('id_grupo_usuario_elaborado_por')->references('id_grupo_usuario')->on('grupo_usuarios');
      
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
        Schema::dropIfExists('formulario_responsable_informacion');
    }
}
