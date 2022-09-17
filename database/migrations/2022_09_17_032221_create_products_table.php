<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('dispositivo');
            $table->float('n/serie');
            $table->string('marca');
            $table->string('modelo');
            $table->string('departamento');
            $table->string('asignado_a');
            $table->string('ubicacion');
            $table->string('responsable_final');
            $table->string('estatus');
            $table->float('ip');
            $table->string('hostname');
            $table->string('observaciones');
            
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
        Schema::dropIfExists('products');
    }
}
