<?php

use Illuminate\Database\Seeder;

class BloodTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BloodType::create([
            'monday' => ['1+' => \App\Models\BloodNecessity::NOT_NECESSARY, '2+' => \App\Models\BloodNecessity::SO_NECESSARY],
            'tuesday' => ['1+' => \App\Models\BloodNecessity::NOT_NECESSARY, '2+' => \App\Models\BloodNecessity::SO_NECESSARY],
            'wednesday' => ['1+', '2-'],
            'thursday' => ['1-', '0'],
            'friday' => ['2+', '2-'],
            'saturday' =>  ['1+', '3-'],
            'sunday' => ['1+', '2-']
        ]);
    }
}
