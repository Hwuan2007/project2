<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'type_of_drink';
    protected $primaryKey = 'type_id';
    public $timestamps = false;
    protected $fillable = ['type_name', 'categories_id'];

    public function category(){
        return $this -> belongsTo(Category::class, 'categories_id');
    }
}
