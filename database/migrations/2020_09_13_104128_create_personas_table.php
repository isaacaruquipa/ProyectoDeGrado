<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id_persona_safi');
            $table->string('nombre_safi',80);
            $table->string('paterno_safi',80);
            $table->strign('materno',80);
            $table->string('ci_safi',100);
            $table->date('fecha_nacimiento_safi');
            $table->string('email_safi',60);
            $table->string('telefono_safi',45)->nullable()->default(null);
            $table->string('direccion_safi');
            $table->string('ru_safi',45)->nullable()->default(null);
            $table->string('rd_safi',45)->nullable()->default(null);
            $table->string('estado_persona_safi',['activo','inactivo'])->nullable()->default(null);
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
        Schema::dropIfExists('personas');
    }
}
