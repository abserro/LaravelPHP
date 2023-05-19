<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'code' => $this->faker->unique()->regexify('[A-Za-z0-9_-]{10}'),
            'active' => $this->faker->boolean,
            'parent_id' => Category::query()->count() ? Category::query()->inRandomOrder()->first()->id : null,
        ];
    }
}
