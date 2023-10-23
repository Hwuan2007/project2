<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['categories_name'];

    public function drink(){
        return $this -> hasMany(Drink::class);
    }
}
