<?php

namespace Database\Seeders;

use App\Models\Horario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 3; $i++) {

            DB::table('horarios')->insert(array(
                'lunes_abierto' => true,
                'lunes_turnos' => false,
                'lunes_abrir1' => '08:00',
                'lunes_cerrar1' => '15:00',
                'lunes_abrir2' => '17:00',
                'lunes_cerrar2' => '21:00',
                'martes_abierto' => false,
                'martes_turnos' => true,
                'martes_abrir1' => '08:00',
                'martes_cerrar1' => '15:00',
                'martes_abrir2' => '17:00',
                'martes_cerrar2' => '21:00',
                'miercoles_abierto' => false,
                'miercoles_turnos' => true,
                'miercoles_abrir1' => '08:00',
                'miercoles_cerrar1' => '15:00',
                'miercoles_abrir2' => '17:00',
                'miercoles_cerrar2' => '21:00',
                'jueves_abierto' => true,
                'jueves_turnos' => false,
                'jueves_abrir1' => '08:00',
                'jueves_cerrar1' => '15:00',
                'jueves_abrir2' => '17:00',
                'jueves_cerrar2' => '21:00',
                'viernes_abierto' => true,
                'viernes_turnos' => false,
                'viernes_abrir1' => '08:00',
                'viernes_cerrar1' => '15:00',
                'viernes_abrir2' => '17:00',
                'viernes_cerrar2' => '21:00',
                'sabado_abierto' => false,
                'sabado_turnos' => true,
                'sabado_abrir1' => '08:00',
                'sabado_cerrar1' => '15:00',
                'sabado_abrir2' => '17:00',
                'sabado_cerrar2' => '21:00',
                'domingo_abierto' => true,
                'domingo_turnos' => false,
                'domingo_abrir1' => '08:00',
                'domingo_cerrar1' => '15:00',
                'domingo_abrir2' => '17:00',
                'domingo_cerrar2' => '21:00',
                'restaurante_id' => $i + 1
            ));
        }
    }
}
