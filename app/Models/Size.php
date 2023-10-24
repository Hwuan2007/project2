<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $table = 'size';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['size_name', 'size_price'];
    public function drinkDetail(){
        return $this -> hasMany(DrinkDetail::class);
    }
}
