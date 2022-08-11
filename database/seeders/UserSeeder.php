<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add 2 Users

        \App\Models\User::factory()->create([
            'first_name' => 'Pirlo',
            'last_name' => 'Nyagus',
            'email' => 'pirlo@gmail.com'
        ]);

        \App\Models\User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => NULL,
            'email' => 'admin@gmail.com'
        ]);

        // Add 5 Routes

        // \App\Models\Routes::factory()->create([

        // ]);
    }
}
