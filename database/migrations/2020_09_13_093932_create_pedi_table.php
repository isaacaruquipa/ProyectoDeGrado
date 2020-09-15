<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePediTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedi', function (Blueprint $table) {
            $table->bigIncrements('id_pedi');
            $table->string('nombre_pedi',512)->unique();
            $table->year('fecha_inicio_pedi');
            $table->year('fecha_final_pedi');
            $table->enum('estado', ['ACTIVO', 'INACTIVO']);
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
        Schema::dropIfExists('pedi');
    }
}
