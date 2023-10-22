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
        $menus = Menu::with('category') -> get();
        $categories = Category::all();
        return view('client/menu/all', [
            'drinks' => $drinks,
            'menus' => $menus,
            'categories' => $categories
        ]);
    }
    public function item(Menu $menu)
    {
        $drinks = Drink::with('menu') -> get();
        $menus = Menu::with('category') -> get();
        $categories = Category::all();
        return view('client/menu/Menuitem', [
            'drinks' => $drinks,
            'menus' => $menus,
            'categories' => $categories,
            'menu' => $menu
        ]);
    }

}
