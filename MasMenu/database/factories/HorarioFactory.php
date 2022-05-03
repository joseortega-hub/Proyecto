<?php

namespace Database\Factories;

use App\Models\Horario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horario>
 */
class HorarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string, mixed>
     */
    protected $model = Horario::class;
    /**
     * Define the model's default state.
     *
    @return array
     */
    public function definition()
    {
        return [
            'restaurante_id' => 2,
            'lunes-abierto' => true,
            'lunes-turnos' => false,
            'lunes-abrir1' => '08:00',
            'lunes-cerrar1' => '15:00',
            'lunes-abrir2' => '17:00',
            'lunes-cerrar2' => '21:00',
            'martes-abierto' => false,
            'martes-turnos' => true,
            'martes-abrir1' => '08:00',
            'martes-cerrar1' => '15:00',
            'martes-abrir2' => '17:00',
            'martes-cerrar2' => '21:00',
            'miercoles-abierto' => false,
            'miercoles-turnos' => true,
            'miercoles-abrir1' => '08:00',
            'miercoles-cerrar1' => '15:00',
            'miercoles-abrir2' => '17:00',
            'miercoles-cerrar2' => '21:00',
            'jueves-abierto' => true,
            'jueves-turnos' => false,
            'jueves-abrir1' => '08:00',
            'jueves-cerrar1' => '15:00',
            'jueves-abrir2' => '17:00',
            'jueves-cerrar2' => '21:00',
            'viernes-abierto' => true,
            'viernes-turnos' => false,
            'viernes-abrir1' => '08:00',
            'viernes-cerrar1' => '15:00',
            'viernes-abrir2' => '17:00',
            'viernes-cerrar2' => '21:00',
            'sabado-abierto' => false,
            'sabado-turnos' => true,
            'sabado-abrir1' => '08:00',
            'sabado-cerrar1' => '15:00',
            'sabado-abrir2' => '17:00',
            'sabado-cerrar2' => '21:00',
            'domingo-abierto' => true,
            'domingo-turnos' => false,
            'domingo-abrir1' => '08:00',
            'domingo-cerrar1' => '15:00',
            'domingo-abrir2' => '17:00',
            'domingo-cerrar2' => '21:00'
        ];
    }
}
