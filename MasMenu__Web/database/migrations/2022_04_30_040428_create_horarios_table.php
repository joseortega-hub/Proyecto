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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('restaurante_id')->unique();
            $table->foreign('restaurante_id')->references('id')->on('restaurantes')->onUpdate('cascade')->onDelete('cascade');
            //Lunes
            $table->boolean('lunes_abierto');
            $table->boolean('lunes_turnos');
            $table->string('lunes_abrir1');
            $table->string('lunes_cerrar1');
            $table->string('lunes_abrir2');
            $table->string('lunes_cerrar2');
            //Martes
            $table->boolean('martes_abierto');
            $table->boolean('martes_turnos');
            $table->string('martes_abrir1');
            $table->string('martes_cerrar1');
            $table->string('martes_abrir2');
            $table->string('martes_cerrar2');
            //Miercoles
            $table->boolean('miercoles_abierto');
            $table->boolean('miercoles_turnos');
            $table->string('miercoles_abrir1');
            $table->string('miercoles_cerrar1');
            $table->string('miercoles_abrir2');
            $table->string('miercoles_cerrar2');
            //Jueves
            $table->boolean('jueves_abierto');
            $table->boolean('jueves_turnos');
            $table->string('jueves_abrir1');
            $table->string('jueves_cerrar1');
            $table->string('jueves_abrir2');
            $table->string('jueves_cerrar2');
            //Viernes
            $table->boolean('viernes_abierto');
            $table->boolean('viernes_turnos');
            $table->string('viernes_abrir1');
            $table->string('viernes_cerrar1');
            $table->string('viernes_abrir2');
            $table->string('viernes_cerrar2');
            //Sabado
            $table->boolean('sabado_abierto');
            $table->boolean('sabado_turnos');
            $table->string('sabado_abrir1');
            $table->string('sabado_cerrar1');
            $table->string('sabado_abrir2');
            $table->string('sabado_cerrar2');
            //Domingo
            $table->boolean('domingo_abierto');
            $table->boolean('domingo_turnos');
            $table->string('domingo_abrir1');
            $table->string('domingo_cerrar1');
            $table->string('domingo_abrir2');
            $table->string('domingo_cerrar2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};
