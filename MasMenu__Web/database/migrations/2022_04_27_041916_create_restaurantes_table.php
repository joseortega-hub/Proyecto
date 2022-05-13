<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); //almacena un valor en la columna created_at y updated cuando se crea un registro o se actualiza
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('region');
            $table->string('telefono');
            $table->string('gmail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurantes');
    }
};
