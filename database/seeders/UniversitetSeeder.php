<?php

namespace Database\Seeders;

use App\Models\Universitet;
use Illuminate\Database\Seeder;

class UniversitetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Universitet::factory()->count(10)->create();
    }
}
