<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    use HasFactory;
    public function index()
    {
        $type_of_drink = DB::table('type_of_drink')
            ->join('category', 'type_of_drink.categories_id', '=', 'category.categories_id')
            ->select([
                'type_of_drink.*',
                'category.categories_name AS category_name'
            ])
            ->get();
        return $type_of_drink;
    }
    public function store(){
        DB::table('type_of_drink')
            ->insert([
                'type_name' => $this -> type_name,
                'categories_id' => $this -> categories_id
            ]);
    }
    public function edit(){
        $type_of_drink = DB::table('type_of_drink')
            -> where('id',$this -> type_id)
            -> get();
        return $type_of_drink;
    }
}
