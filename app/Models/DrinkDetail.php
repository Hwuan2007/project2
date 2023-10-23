<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DrinkDetail extends Model
{
    use HasFactory;
    protected $table = 'drink_detail';
    public $timestamps = false;
    protected $fillable = ['drk_price', 'drk_description', 'size_id','topping_id', 'drk_id'];

    public function drink(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this -> belongsTo(Drink::class,  'drk_id');
    }
    public function getTopping() {
        $drinks = DB::table('drink')
            ->join('drink_detail', 'drink.id', '=', 'drink_detail.drk_id')
            ->join('topping', 'drink_detail.topping_id', '=', 'topping.id')
            ->select('topping.*')
            ->where('drink.id', '=', $this -> id)
            ->get();
    }
}
