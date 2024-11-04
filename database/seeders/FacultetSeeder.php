<?php

namespace Database\Seeders;

use App\Models\Facultet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facultet::factory()->count(10)->create();
    }
}
