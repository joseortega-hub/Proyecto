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


        $nombres = ['Fosters Hollywood', 'Burger King', 'Mc Donald', 'Argentino', 'Capichi', 'TGB'];
        $ciudades = ['Zenia', 'Albatera', 'Elche', 'Callosa', 'Catral', 'Orihuela'];
        $regiones = ['Torrevieja', 'Alicante', 'Murcia', 'Andalucia', 'Galicia', 'Pais Vasco'];
        $paises = ['España', 'España', 'España', 'Portugal', 'Italia', 'Francia'];
        $direcciones = ['Calle San Gabriel Nº11', 'Calle Arcangel Nº98', 'Calle Benito Nº69', 'Calle Santa Lidia Nº13', 'Calle San Juan Nº31', 'Calle San Miguel Nº3'];
        $telefonos = ['651411615', '789654321', '678954321', '654328978', '722345987', '654312342'];
        $gmails = ['pablo@foster.com', 'maria@burger.com', 'mateas@mcdonald.com', 'jfortega@argentino.com', 'raulsiwen@gmail.com', 'benito@gmail.com',];

        for ($i = 0; $i < 6; $i++) {

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
