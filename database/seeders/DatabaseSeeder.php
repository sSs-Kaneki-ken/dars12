<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Course;
use App\Models\User;
use App\Models\Ovqat;
use App\Models\Massaliq;
use App\Models\Manu;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for( $i = 1; $i <= 10; $i++ ) {
            Course::create(['name' => 'Course '. $i ]);
        }
        
        for( $i = 1; $i <= 5; $i++ ) {
            Address::create(['name' => 'Address '. $i ]);
        }

        $this->call([
            UniversitetSeeder::class,
            FacultetSeeder::class,
            LeaningSeeder::class,
            GroupSeeder::class,
            StudentSeeder::class,
        ]);
        
    }
}
