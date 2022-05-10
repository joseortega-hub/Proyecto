<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $nombres = ['Carta Fosters Hollywood', 'Carta Burger king', 'Carta Mc Donald', 'Carta Argentino', 'Carta Capichi', 'Carta TGB'];
        for ($i = 0; $i < count($nombres); $i++) {

            DB::table('menus')->insert(array(
                'nombre' => $nombres[$i],
                'urlQR' => 'codigoQr.png',
                'urlArchivo' => 'foster.pdf',
                'restaurante_id' => $i + 1
            ));
        }
    }
}
