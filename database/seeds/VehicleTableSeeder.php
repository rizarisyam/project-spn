<?php

use App\Vehicle;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class VehicleTableSeeder extends Seeder
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
            Vehicle::create([
                'nopol' => $faker->randomNumber(6),
                'merek' => $faker->word(['BMW', 'Toyota']),
                'model' => $faker->text(6),
                'tahun' => $faker->date($format = 'Y')
            ]);
        }
    }
}
