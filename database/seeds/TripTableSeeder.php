<?php

use App\Trip;
use Illuminate\Database\Seeder;

class TripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::create([
            'trip' => 'Quari - Stone Crusher',
            'tarif' => 35000
        ]);

        Trip::create([
            'trip' => 'Stone Crusher - Batusangkar sekitarnya',
            'tarif' => 50000
        ]);

        Trip::create([
            'trip' => 'Stone Crusher - Talawi sekitarnya',
            'tarif' => 50000
        ]);
    }
}
