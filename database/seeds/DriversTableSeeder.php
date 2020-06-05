<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Driver;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        foreach (range(1,20) as $i)
        {
            Driver::create([
                'nik' => $faker->unixTime(),
                'nama' => $faker->name(),
                'agama' => 'islam',
                'tempat_lahir' => $faker->state(),
                'tanggal_lahir' => $faker->date(),
                'jenis_kelamin' => $faker->randomElement(['L','P']),
                'alamat' => $faker->address(),
                'no_tlp' => $faker->e164PhoneNumber(),
            ]);
        }
    }

}
