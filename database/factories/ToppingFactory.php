<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ToppingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'topping_name' => $this->faker ->randomElement(['Shot Espresso', 'Shot Espresso', 'Sốt Caramel','Trân châu trắng']),
            'topping_price' => $this->faker ->randomElement([10000,10000,10000,10000]),
        ];
    }
}
