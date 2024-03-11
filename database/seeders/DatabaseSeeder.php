<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\Country;
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

        // You can call other seeders here if needed
        // $this->call(OtherSeeder::class);
    }
}
