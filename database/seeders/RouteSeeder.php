<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $routes = [
            'Kisumu' => 2000,
            'Mombasa' => 2500,
            'Nakuru' => 1200,
            'Eldoret' => 1500,
            'Embu' => 1200
        ];

        foreach ($routes as $route => $cost) {
            \App\Models\Route::create([
                'departure' => 'Nairobi',
                'destination' => $route,
                'cost' => $cost
            ]);
        }

        // \App\Models\Route::factory(5)->create(
        //     [
        //         [
        //             'departure' => 'Nairobi',
        //             'destination' => 'Kisumu',
        //             'cost' => 2000
        //         ],
        //         [
        //             'departure' => 'Nairobi',
        //             'destination' => 'Mombasa',
        //             'cost' => 2500
        //         ],
        //         [
        //             'departure' => 'Nairobi',
        //             'destination' => 'Nakuru',
        //             'cost' => 1200
        //         ],
        //         [
        //             'departure' => 'Nairobi',
        //             'destination' => 'Eldoret',
        //             'cost' => 1500
        //         ],
        //         [
        //             'departure' => 'Nairobi',
        //             'destination' => 'Embu',
        //             'cost' => 1200
        //         ],
        //     ]
        // );
    }
}
