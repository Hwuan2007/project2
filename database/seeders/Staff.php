<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Staff::factory(10)->create();
    }
}
