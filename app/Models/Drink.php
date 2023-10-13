<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;
    protected $table = 'drink';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['type_name', 'categories_id', 'categories_id', 'categories_id', 'categories_id'];

    public function category(){
        return $this -> belongsTo(Category::class, 'categories_id');
    }
}
