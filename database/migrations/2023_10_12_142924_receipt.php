<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Receipt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt', function (Blueprint $table) {
            $table->id();
            $table->integer('total_price');
            $table->text('note')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('user');
            $table->foreignId('shipping_id')->constrained('shipping_method');
            $table->string( 'receipt_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipt');
    }
}
