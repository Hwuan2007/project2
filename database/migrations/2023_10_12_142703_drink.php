<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink', function (Blueprint $table) {
            $table->id();
            $table->string('drk_name');
            $table->string('drk_description');
            $table->string('drk_img');
            $table->string('drk_price');
            $table->foreignId('categories_id') -> constrained('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drink');
    }
}
