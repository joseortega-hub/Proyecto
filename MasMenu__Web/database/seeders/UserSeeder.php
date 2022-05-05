<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();

        $email = "email@email.com";
        DB::table('users')->insert(array(
            'name' => "juan",
            'email' => "juan_carlos@gmail.com",
            'password' => "password"
        ));


        DB::table('users')->insert(array(
            'name' => "Paco",
            'email' => "h@h.com",
            'password' => "pop123123",
        ));

        DB::table('users')->insert(array(
            'name' => "Jose",
            'email' => "haa@h.com",
            'password' => "123123",
        ));
    }
}
