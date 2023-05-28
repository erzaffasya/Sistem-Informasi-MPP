<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentang::create([
            'id' => 1,
        ]);
    }
}
