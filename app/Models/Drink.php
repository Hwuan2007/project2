<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Drink extends Model
{
    use HasFactory;
    protected $table = 'drink';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['drk_name', 'drk_img', 'drk_description','drk_price', 'type_id'];

    public function menu()
    {
        return $this -> belongsTo(Menu::class, 'type_id');
    }

    public function getTopping() {
        return DB::table('drink')
    ->join('drink_detail', 'drink.id', '=', 'drink_detail.drk_id')
    ->join('topping', 'drink_detail.topping_id', '=', 'topping.id')
    ->select('topping.*')
    ->where('drink.id', '=', $this -> id)
    ->get();
    }
}
