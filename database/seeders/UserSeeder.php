<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'firstname' => 'Soufian',
            'lastname' => 'AIT TIRITE',
            'email' => 'saittirite@websociety.fr',
            'password' => Hash::make('password'),
            'phoneNumber' => '0601020304'
        ]);
    }
}
