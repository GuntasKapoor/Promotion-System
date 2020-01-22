<?php

use App\Properties;
use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Properties::truncate();

        Properties::create([
            'p_name' => 'Guntas',
            'p_location' => 'Punjab',
            'p_price' => 100
        ]);

        Properties::create([
            'p_name' => 'Vatsal',
            'p_location' => 'Banglore',
            'p_price' => 200
        ]);

        Properties::create([
            'p_name' => 'Charvi',
            'p_location' => 'Rajasthan',
            'p_price' => 500
        ]);
        Properties::create([
            'p_name' => 'Pratyush',
            'p_location' => 'Tamil Nadu',
            'p_price' => 1000
        ]);
        Properties::create([
            'p_name' => 'Samarth',
            'p_location' => 'Punjab',
            'p_price' => 2000
        ]);

    }
}
