<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depositos', function (Blueprint $table) {
            $table->bigIncrements('id_deposito');
            $table->unsignedBigInteger('id_numero_formulario');
            $table->unsignedBigInteger('id_tipo_ingreso');
            $table->string('numero_deposito',45);
            $table->decimal('monto_deposito',15,2);
            $table->date('fecha_deposito');
            $table->enum('estado_deposito',['ACTIVO','INACTIVO']);
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
        Schema::dropIfExists('depositos');
    }
}
