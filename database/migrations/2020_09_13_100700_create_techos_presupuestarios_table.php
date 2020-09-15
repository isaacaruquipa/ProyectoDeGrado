<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechosPresupuestariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techos_presupuestarios', function (Blueprint $table) {
            $table->bigIncrements('id_techo_presupuestario');
            $table->bigInteger('id_formulario_responsable_informacion');
            $table->bigInteger('id_fuente_financiamiento');
            $table->decimal('monto_asignado',15,2);
            $table->decimal('monto_ejecutado',15,2);
            $table->enum('estado',['ACTIVO','INACTIVO']);

            // CLAVES FORANEAS
            $table->foreign('id_formulario_responsable_informacion')->references('id_formulario_responsable_informacion')->on('formulario_responsable_informacion');
            $table->foreign('id_fuente_financiamiento')->references('id_fuente_financiamiento')->on('fuente_financiamientos');
            
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
        Schema::dropIfExists('techos_presupuestarios');
    }
}
