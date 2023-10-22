<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'type_of_drink';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['type_name', 'categories_id'];

    public function category()
    {
        return $this -> belongsTo(Category::class, 'categories_id');
    }
    public function drink(){
        return $this -> hasMany(Drink::class);
    }
    public function drinkmenu(){
        return $this -> hasMany(DrinkMenu::class);
    }
}
