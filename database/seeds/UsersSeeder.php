<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'vk_id' => 43214124,
            'first_name' => 'Anna',
            'last_name' => 'Lyalina',
            'patronymic' => 'rewq',
            'avatar' => 'gwpghwep',
            'email' => 'vfeqbwbger',
            'access_role' => App\User::DONOR,
            'remember_token' => 'fhieqobvf',
        ]);

        \App\User::create([
            'vk_id' => 435431543,
            'first_name' => 'Anna2',
            'last_name' => 'Lyalina2',
            'patronymic' => 'rewq2',
            'avatar' => 'gwpghwep',
            'email' => 'eqpnbfdwp',
            'access_role' => App\User::DOCTOR,
            'remember_token' => 'fdbfds',
        ]);

        \App\Models\Donor::create([
            'id' => 1,
            'checkup' => false,
            'blood_type' => 1,
        ]);
    }
}
