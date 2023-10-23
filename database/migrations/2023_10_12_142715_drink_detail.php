<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DrinkDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_detail', function (Blueprint $table) {
            $table->foreignId('size_id')->constrained('size');
            $table->foreignId('topping_id')->constrained('topping');
            $table->foreignId('drk_id')->constrained('drink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drink_detail');
    }
}
