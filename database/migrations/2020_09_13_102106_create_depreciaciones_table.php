<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepreciacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depreciaciones', function (Blueprint $table) {
            $table->bigIncrements('id_depreciacion');
            $table->string('valor_inicial',45);
            $table->string('valor_actual',45);
            $table->string('depreciacion_inicial',45);
            $table->string('depreciacion_gestion',45);
            $table->string('depreciacion_acumulada',45);
            $table->string('valor_residual',45);
            $table->string('vida_util_depreciacion',45);
            $table->enum('estado_depreciacion',['ACTIVO','INACTIVO']);
            $table->unsignedInteger('safe_id_ufv');
            $table->unsignedInteger('safe_id_item_orden_compra');

            $table->foreign('safe_id_ufv')->references('id_ufv')->on('ufv');
         //   $table->foreign('safe_id_item_orden_compra')->references('id_item_orden_compra')->on('items_orden_compra');

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
        Schema::dropIfExists('depreciaciones');
    }
}
