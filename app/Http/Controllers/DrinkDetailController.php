<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;
use App\Models\DrinkDetail;
use App\Http\Requests\StoreDrinkDetailRequest;
use App\Models\Size;
use App\Models\topping;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DrinkDetailController extends Controller
{
    public function drinkDetail(Drink $drink)
    {
        $sizes = Size::all();
        return view('client/drink_detail/drinkDetail', [
            'drink' => $drink,
            'sizes' => $sizes,
        ]);
    }
    public function store(Request $request, Drink $drink): \Illuminate\Http\RedirectResponse
    {
        $array = [];
        $array = Arr::add($array, 'size_id', $request -> size_id);
        $array = Arr::add($array, 'topping', join(",", $request -> topping));
        $array = Arr::add($array, 'drk_id', $request -> drink -> id);
        DrinkDetail::create($array);
        return Redirect::route('cart.addToCart');
    }
    public function addToCart()
    {
        return view('client/cart/addToCart');
    }
}
