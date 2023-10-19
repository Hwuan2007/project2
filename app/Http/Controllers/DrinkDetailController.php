<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;
use App\Models\DrinkDetail;
use App\Http\Requests\StoreDrinkDetailRequest;
use App\Http\Requests\UpdateDrinkDetailRequest;
use App\Models\Menu;

class DrinkDetailController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $drinks = Drink::all();
        $categories = Category::all();
        return view('client/drink_detail/index', [
            'menus' => $menus,
            'drinks' => $drinks,
            'categories' => $categories
        ]);
    }
}
