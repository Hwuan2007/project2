<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => bcrypt('123456'),
            'role_id' => 1,
            'staff_phonenumber' => '012345789',
            'staff_address' => 'hanoi'
        ];
    }
}
