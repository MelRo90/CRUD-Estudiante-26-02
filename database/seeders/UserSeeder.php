<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Flight;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flight::table('flights')->insert([
            'name' => Str::random(10),
            'address' => Str::random(10).'@gmail.com',
            'phone_number' => Str::random(10)('password'),
        ]);
    }
}
