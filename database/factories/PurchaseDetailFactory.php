<?php

namespace Database\Factories;

use App\Models\PurchaseDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PurchaseDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shop_id'=>$this->faker->numberbetween(1,50),
            'price'=>$this->faker->numberbetween(1,50),
            'product_id'=>$this->faker->numberbetween(1,50),
            'date'=>$this->faker->dateTimeThisDecade(),
        ];
    }
}
