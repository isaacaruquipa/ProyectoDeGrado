<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id_proveedor');
            $table->string('nit_proveedor',20);
            $table->string('nombre_proveedor',256);
            $table->string('representante_legal_proveedor',256);
            $table->string('tipo_actividad_proveedor',256);
            $table->string('email_proveedor',128);
            $table->string('telefono_proveedor',25);
            $table->unsignedBigInteger('id_ciudad');
            $table->enum('estado_proveedor',['ACTIVO','INACTIVO']);
            $table->enum('tipo_proveedor',['UNIPERSONAL','SOCIEDAD']);
            $table->string('direccion_proveedor',200);
            $table->timestamps();

            // CLAVES FORANEAS
            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
