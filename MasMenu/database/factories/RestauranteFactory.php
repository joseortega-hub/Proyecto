<?php

namespace Database\Factories;

use App\Models\Restaurante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurante>
 */
class RestauranteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string, mixed>
     */
    protected $model = Restaurante::class;
    /**
     * Define the model's default state.
     *
    @return array
     */
    public function definition()
    {
        return [
            'users_id' => 1,
            'nombre' => $this->faker->name,
            'direccion' => $this->faker->address,
            'ciudad' => $this->faker->city,
            'pais' => $this->faker->country,
            'region' => $this->faker->state,
            'telefono' => $this->faker->phoneNumber,
            'gmail' => $this->faker->unique()->safeEmail
        ];
    }
}
