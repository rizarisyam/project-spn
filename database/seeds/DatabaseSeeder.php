<?php

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
        $this->call([UsersTableSeeder::class]);
        $this->call([DriversTableSeeder::class]);
        $this->call([VehicleTableSeeder::class]);
        $this->call([RentTableSeeder::class]);
        $this->call([TripTableSeeder::class]);
    }
}
