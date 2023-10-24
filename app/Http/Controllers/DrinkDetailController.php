<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;
use App\Models\DrinkDetail;
use App\Http\Requests\StoreDrinkDetailRequest;
use App\Models\Size;
use App\Models\topping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DrinkDetailController extends Controller
{
    public function drinkDetail(Drink $drink)
    {
        $toppings = DrinkDetail::with('topping') -> get();
        $sizes = DrinkDetail::with('size') -> get();
        return view('client/drink_detail/drinkDetail', [
            'drink' => $drink,
            'toppings' => $toppings,
            'sizes' => $sizes,
        ]);
    }
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = new DrinkDetail();
        $data -> topping = $request -> topping_id;
//        $data -> topping = implode(',', $checkbox_data);

        return Redirect::route('cart.addToCart');
    }
    public function addToCart()
    {
        return view('client/cart/addToCart');
    }
}
