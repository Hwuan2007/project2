<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topping extends Model
{
    use HasFactory;
    protected $table = 'topping';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['topping_name'];
    public function drinkDetail(){
        return $this -> hasMany(DrinkDetail::class);
    }
}
