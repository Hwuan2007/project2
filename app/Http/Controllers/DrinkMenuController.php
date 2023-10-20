<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;
use App\Models\Menu;

class DrinkMenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $drinks = Drink::all();
        return view('client/menu/all', [
            'menus' => $menus,
            'drinks' => $drinks,
        ]);
    }

}
