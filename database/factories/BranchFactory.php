<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $companies = Company::pluck('id')->toArray();

        return [
            'name' => $this->faker->company(),
            'location' => $this->faker->address(),
            'company_id' => $this->faker->randomElement($companies)
        ];
    }
}
