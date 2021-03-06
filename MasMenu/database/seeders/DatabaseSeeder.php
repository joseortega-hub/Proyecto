<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserSeeder::class);
        $this->call(RestauranteSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(HorarioSeeder::class);
        $this->call(ImagenSeeder::class);
    }
}
