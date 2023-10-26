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
            'topping_name' => 'Kem Phô Mai Macchiato',
//            'Shot Espresso',
//            'Trân châu trắng',
//            'Sốt Caramel',
            'topping_price' => '10000',
//            '10000',
//            '10000',
//            '10000'
        ];
    }
}
