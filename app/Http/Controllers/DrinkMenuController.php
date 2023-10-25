<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;
use App\Models\DrinkMenu;
use Illuminate\Support\Facades\DB;

class DrinkMenuController extends Controller
{
    public function index()
    {
        $drinks = Drink::all();
        $categories = Category::all();
        return view('client/menu/all', [
            'drinks' => $drinks,
            'categories' => $categories
        ]);
    }
    public function item(Category $category)
    {
        $categories = Category::all();
        $drinks = Drink::all() -> where('categories_id', '=', $category -> id);
        return view('client/menu/Menuitem', [
            'drinks' => $drinks,
            'categories' => $categories,
        ]);
    }

}
