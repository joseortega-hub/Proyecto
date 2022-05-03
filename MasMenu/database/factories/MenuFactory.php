<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string, mixed>
     */
    protected $model = Menu::class;
    /**
     * Define the model's default state.
     *
    @return array
     */
    public function definition()
    {
        return [
            'restaurante_id' => '2',
            'nombre' => $this->faker->catchPhrase,
            'urlQR' => '/img/QR/codigoQr.png'/*image($dir = '/img/imagen1.jpg', $width = 640, $height = 480)*/,
            'urlArchivo' => '/img/inicio1.jpg',

        ];
    }
}
