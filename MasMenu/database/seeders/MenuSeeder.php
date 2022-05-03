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
        $nombre1 = 'carta Fosters Hollywood';
        $nombre2 = 'carta Burger king';
        $nombre3 = 'carta Casa Paula';


        $nombres = [$nombre1, $nombre2, $nombre3];

        for ($i = 0; $i < count($nombres); $i++) {

            DB::table('menus')->insert(array(
                'nombre' => $nombres[$i],
                'urlQR' => 'codigoQr.png',
                'urlArchivo' => 'archivo.pdf',
                'restaurante_id' => $i + 1
            ));
        }
    }
}
