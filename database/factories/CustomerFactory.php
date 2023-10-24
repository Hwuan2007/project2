<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_username' => $this -> faker -> name,
            'email' => $this -> faker -> email,
            'password' => bcrypt('123456'),
            'customer_address' => $this -> faker -> address,
            'customer_phonenumber' => $this -> faker -> e164PhoneNumber(),
            'role_id' => $this -> faker -> randomElement(DB::table('role') -> pluck('id')),
        ];
    }
}
