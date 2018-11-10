<?php

use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Schedule::create([
            'id_donor' => 1,
            'id_hospital' => 1,
            'time' => \Carbon\Carbon::now()->addDays(1),
            'code' => str_random(4),
            'approval' => false,
        ]);
    }
}
