<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // $id = $faker->numberBetween($min = 1, $max = 1000);
            'id' => $this->faker->unique()->numberBetween($min=1, $max=200),
            'invoice_number' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{5}'),
            'purchaser_id' => $this->faker->numberBetween(1, 100),
            'order_date' => $this->faker->date(),
        ];
    }
}
