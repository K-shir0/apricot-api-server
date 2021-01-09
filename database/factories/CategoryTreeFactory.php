<?php

namespace Database\Factories;

use App\Models\CategoryTree;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryTreeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryTree::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent_id' => $this->faker->numberbetween(1,50),
            'child_id' => $this->faker->numberbetween(1,50),
        ];
    }
}
