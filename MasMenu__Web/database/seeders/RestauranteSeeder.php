<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Restaurante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




        $faker = Faker::create();
        $nombre1 = 'Fosters Hollywood';
        $nombre2 = 'Burger king';
        $nombre3 = 'Casa Paula';


        $nombres = [$nombre1, $nombre2, $nombre3];
        $ciudades = ['Albatera', 'Elche', 'Callosa', 'Catral', 'Orihuela'];
        $regiones = ['Alicante', 'Murcia', 'Andalucia', 'Galicia', 'Pais Vasco'];
        $paises = ['España', 'Portugal', 'Italia', 'Francia'];
        $direcciones = ['Calle Santa Lidia Nº13', 'Calle San Juan Nº31', 'Calle San Miguel Nº3'];
        $telefonos = ['654328978', '722345987', '654312342'];
        $gmails = ['jfortega@gmail.com', 'raulsiwen@gmail.com', 'benito@gmail.com'];

        for ($i = 0; $i < 3; $i++) {

            DB::table('restaurantes')->insert(array(
                'nombre' => $nombres[$i],
                'ciudad' => $ciudades[$i],
                'region' => $regiones[$i],
                'pais' => $paises[$i],
                'direccion' => $direcciones[$i],
                'telefono' => $telefonos[$i],
                'gmail' => $gmails[$i],
                'users_id' => $i + 1
            ));
        }
    }
}
