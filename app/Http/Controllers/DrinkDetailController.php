<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;
use App\Models\DrinkDetail;
use App\Http\Requests\StoreDrinkDetailRequest;
use App\Http\Requests\UpdateDrinkDetailRequest;
use App\Models\Menu;
use App\Models\Size;
use App\Models\topping;
use Illuminate\Support\Facades\Redirect;


class DrinkDetailController extends Controller
{
    public function drinkDetail(Drink $drink)
    {
        $toppings = topping::all();
        $sizes = Size::all();
        return view('client/drink_detail/drinkDetail', [
            'drink' => $drink,
            'toppings' => $toppings,
            'sizes' => $sizes,
        ]);
    }
}
