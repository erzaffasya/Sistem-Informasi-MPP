<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Profile;
use App\Models\Tentang;
use App\Models\User;
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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
            'role' => 'admin',
        ]);

        Profile::create([
            'id' => 1,
        ]);
        $this->call([
            BeritaSeeder::class,
        ]);
    }
}
