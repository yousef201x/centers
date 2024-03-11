<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Branch;
use App\Models\Company;
use App\Models\Country;
use App\Models\Course;
use App\Models\Lab;
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
        // Create 100 instances of Country model
        Country::factory()->count(100)->create();
        Company::factory()->count(100)->create();
        Branch::factory()->count(100)->create();
        Lab::factory()->count(100)->create();

        $this->call([
            CategorySeeder::class
        ]);

        Course::factory()->count(100)->create();
    }
}
