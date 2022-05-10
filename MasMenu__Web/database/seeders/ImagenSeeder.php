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



        $img1 = ['foster1.png', 'foster2.jpg', 'foster3.jpg', 'foster4.jpg', 'foster5.jpg'];
        $img2 = ['burguer1.jpg', 'burguer2.png', 'burguer3.jpg', 'burguer4.jpg', 'burguer5.jpg'];
        $img3 = ['mcdonald1.jpg', 'mcdonald2.jpg', 'mcdonald3.jpg', 'mcdonald4.jpg', 'mcdonald5.jpg'];
        $img4 = ['argentino1.jpg', 'argentino2.jpg', 'argentino3.jpg', 'argentino4.jpg', 'argentino5.jpg'];
        $img5 = ['capichi1.jpg', 'capichi2.jpg', 'capichi3.jpg', 'capichi4.jpg', 'capichi5.jpg'];
        $img6 = ['tgb1.jpg', 'tgb2.jpg', 'tgb3.jpg', 'tgb4.jpg', 'tgb5.jpg'];




        for ($i = 0; $i < count($img1); $i++) {
            DB::table('imagenes')->insert(array(
                'urlImg' => $img1[$i],
                'restaurante_id' => 1
            ));
        }

        for ($i = 0; $i < count($img2); $i++) {
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
        for ($i = 0; $i < count($img4); $i++) {
            DB::table('imagenes')->insert(array(
                'urlImg' => $img4[$i],
                'restaurante_id' => 4
            ));
        }
        for ($i = 0; $i < count($img5); $i++) {
            DB::table('imagenes')->insert(array(
                'urlImg' => $img5[$i],
                'restaurante_id' => 5
            ));
        }
        for ($i = 0; $i < count($img6); $i++) {
            DB::table('imagenes')->insert(array(
                'urlImg' => $img6[$i],
                'restaurante_id' => 6
            ));
        }
    }
}
