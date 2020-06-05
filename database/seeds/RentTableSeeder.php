<?php

use App\Rent;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        foreach(range(1,20) as $i)
        {
            Rent::create([
                'driver_id' => $i,
                'vehicle_id' => $i
            ]);
        }
    }
}
