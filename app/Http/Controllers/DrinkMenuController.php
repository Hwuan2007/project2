<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;
use App\Models\Menu;

class DrinkMenuController extends Controller
{
    public function index()
    {
        $drinks = Drink::with('menu') -> get();
        $categories = Category::all();
        return view('client/menu/all', [
            'drinks' => $drinks,
            'categories' => $categories
        ]);
    }
    public function item()
    {
        $drinks = Drink::with('menu') -> get();
        $categories = Category::all();
        return view('client/menu/Menuitem', [
            'drinks' => $drinks,
            'categories' => $categories,
        ]);
    }

}
