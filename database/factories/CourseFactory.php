<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = Category::pluck('id')->toArray();

        return [
            'name' => $this->faker->name,
            'hours' => rand(20, 144),
            'price' => rand(1500, 10000),
            'description' => $this->faker->sentence(10),
            'category_id' => $this->faker->randomElement($categories),
        ];
    }
}
