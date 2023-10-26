<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'size_name' => 'Lớn',
//            'size_name' => 'Vừa',
//            'size_name' => 'Nhỏ',
            'size_price' => '10000',
//            'size_price' => '6000',
//            'size_price' => '0000',
        ];
    }
}
