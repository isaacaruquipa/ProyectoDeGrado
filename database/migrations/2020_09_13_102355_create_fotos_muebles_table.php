<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosMueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos_muebles', function (Blueprint $table) {
            $table->bigIncrements('id_foto');
            $table->string('imagen_foto',70)->nullable()->default(null);
            $table->unsignedInteger('id_orden_compra');


            $table->foreign('id_item_orden_compra')->references('id_item_orden_compra')->on('items_orden_compra');

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
        Schema::dropIfExists('fotos_muebles_table');
    }
}
