<?php

use Illuminate\Database\Seeder;

class HospitalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BloodNecessity::create([
            'monday' => \App\Models\BloodNecessity::NECESSARY,
            'tuesday' => \App\Models\BloodNecessity::NOT_NECESSARY,
            'wednesday' => \App\Models\BloodNecessity::SO_NECESSARY,
            'thursday' => \App\Models\BloodNecessity::NECESSARY,
            'friday' => \App\Models\BloodNecessity::NECESSARY,
            'saturday' =>  \App\Models\BloodNecessity::SO_NECESSARY,
            'sunday' => \App\Models\BloodNecessity::NOT_NECESSARY
        ]);

        \App\Models\WorkingSchedule::create(
            [
                'id_hospital' => 1,
                'start' => '9:00',
                'finish' => '9:00',
                'day' => 1,
                'count' => 10,
            ],
            [
                'id_hospital' => 1,
                'start' => '9:00',
                'finish' => '9:00',
                'day' => 2,
                'count' => 10,
            ],
            [
                'id_hospital' => 1,
                'start' => '9:00',
                'finish' => '9:00',
                'day' => 3,
                'count' => 10,
            ],
            [
                'id_hospital' => 1,
                'start' => '9:00',
                'finish' => '9:00',
                'day' => 4,
                'count' => 10,
            ],
            [
                'id_hospital' => 1,
                'start' => '9:00',
                'finish' => '9:00',
                'day' => 5,
                'count' => 10,
            ],
            [
                'id_hospital' => 1,
                'start' => '9:00',
                'finish' => '9:00',
                'day' => 6,
                'count' => 10,
            ],
            [
                'id_hospital' => 1,
                'start' => '9:00',
                'finish' => '9:00',
                'day' => 7,
                'count' => 10,
            ]);

        \App\Models\Hospital::create([
            'name' => 'bonchiklinika',
            'phone_number' => '9271232323',
            'location_x' => '60.021852',
            'location_y' => '30.267116',
            'code' => str_random(4),
            'hospital_time_id' => 1,
            'blood_necessity_id' => 1,
            'blood_type_id' => 1
        ]);
    }
}
