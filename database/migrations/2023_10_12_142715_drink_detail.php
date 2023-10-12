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
            $table->double('drk_price');
            $table->string('drk_description');
            $table->foreignId('size_id')->constrained('size');
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
