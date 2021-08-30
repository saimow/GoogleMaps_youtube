<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create three restaurant entries
        DB::table('restaurants')->insert([
            'name' => 'Best BBQ',
            'address' => '4142 SW Testing Way',
            'latitude' => 28.452763,
            'longitude' => -81.412228,


        ]);

        DB::table('restaurants')->insert([
            'name' => 'Best BBQ',
            'address' => '28275 Test Lane',
            'latitude' => 28.473342,
            'longitude' => -81.491581,

        ]);

        DB::table('restaurants')->insert([
            'name' => 'Amazing Ice Cream',
            'address' => '352 Faking Drive',
            'latitude' => 28.526046,
            'longitude' => -81.396101,
        ]);
    }

}
