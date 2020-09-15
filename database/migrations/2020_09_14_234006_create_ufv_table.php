<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUfvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ufv', function (Blueprint $table) {
            $table->bigIncrements('id_ufv');
            $table->string('ufv_inicial');
            $table->string('ufv_final');
            $table->string('incremento_por_actualizar',45);
            $table->string('safe_actualizado',45);
            
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
        Schema::dropIfExists('ufv');
    }
}
