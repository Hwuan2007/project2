<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;

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
    public function item()
    {
        $drinks = Drink::all();
        $categories = Category::all();
        return view('client/menu/Menuitem', [
            'drinks' => $drinks,
            'categories' => $categories,
        ]);
    }

}
