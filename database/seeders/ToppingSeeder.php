<?php

namespace Database\Seeders;

use App\Models\topping;
use Illuminate\Database\Seeder;

class ToppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        topping::factory() -> create();
    }
}
