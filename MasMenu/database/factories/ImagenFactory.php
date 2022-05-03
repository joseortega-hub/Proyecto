<?php

namespace Database\Factories;

use App\Models\Imagen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imagen>
 */
class ImagenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string, mixed>
     */
    protected $model = Imagen::class;
    /**
     * Define the model's default state.
     *
    @return array
     */
    public function definition()
    {
        return [
            'urlImg' => 'img/imagen1.jpg',
            'restaurante_id' => 2
        ];
    }
}
