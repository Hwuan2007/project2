<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'staff_username' => $this -> faker -> name,
            'staff_email' => $this -> faker -> email,
            'staff_password' => bcrypt('123456'),
            'staff_address' => $this -> faker -> address,
            'staff_phonenumber' => $this -> faker -> e164PhoneNumber(),
            'role_id' => $this -> faker -> randomElement(DB::table('role') -> pluck('id')),
        ];
    }
}
