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
        $this->call(HospitalsSeeder::class);
        $this->call(BloodTypesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ScheduleSeeder::class);
    }
}
