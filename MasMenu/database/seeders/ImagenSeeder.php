<?php

namespace Database\Seeders;

use App\Models\Imagen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $img1 = ['restaurante1.jpg', 'restaurante1_2.jpg', 'restaurante1_3.jpg', 'restaurante1_4.jpg', 'restaurante1_5.jpg'];
        $img2 = ['restaurante2.jpg', 'restaurante2_2.jpg', 'restaurante2_3.jpg', 'restaurante2_4.jpg', 'restaurante2_5.jpg'];
        $img3 = ['restaurante3.jpg', 'restaurante3_2.jpg', 'restaurante3_3.jpg', 'restaurante3_4.jpg', 'restaurante3_5.jpg'];

        for ($i = 0; $i < count($img1); $i++) {
            DB::table('imagenes')->insert(array(
                'urlImg' => $img1[$i],
                'restaurante_id' => 1
            ));
        }

        for ($i = 0; $i < count($img3); $i++) {
            DB::table('imagenes')->insert(array(
                'urlImg' => $img2[$i],
                'restaurante_id' => 2
            ));
        }
        for ($i = 0; $i < count($img3); $i++) {
            DB::table('imagenes')->insert(array(
                'urlImg' => $img3[$i],
                'restaurante_id' => 3
            ));
        }
    }
}
