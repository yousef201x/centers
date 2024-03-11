<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lab>
 */
class LabFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $letter = Str::random(1);
        $number = rand(0, 9999);
        $branches = Branch::pluck('id')->toArray();
        return [
            'name' => "$letter" . '-' . "$number",
            'capacity' => rand(20, 50),
            'branch_id' => $this->faker->randomElement($branches),
        ];
    }
}
