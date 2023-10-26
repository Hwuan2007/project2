<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => bcrypt('123456'),
            'role_id' => $this -> faker -> randomElement(DB::table('role') -> pluck('id')),
            'user_phonenumber' => '012345789',
            'user_address' => 'hanoi'
        ];
    }
}
