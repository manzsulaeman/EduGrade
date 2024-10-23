<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = [[
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('11221122'),
        ],[
            'name' => 'arizainalf',
            'email' => 'arizainalf@gmail.com',
            'password' => bcrypt('11221122'),
        ]
        ];

        User::create($user);
    }
}
