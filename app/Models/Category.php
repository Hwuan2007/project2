<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    public function index(){
        $category = DB::table('category')
            ->get();
        return $category;
    }
    public function store(){
        DB::table('category')
            ->insert([
                'categories_name' => $this->categories_name
            ]);
    }
}
