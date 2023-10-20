<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkDetail extends Model
{
    use HasFactory;
    protected $table = 'drink_detail';
    public $timestamps = false;
    protected $fillable = ['drk_price', 'drk_description', 'size_id','topping_id', 'drk_id'];
}
