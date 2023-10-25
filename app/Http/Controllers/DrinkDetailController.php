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
use Illuminate\Support\Facades\Session;


class DrinkDetailController extends Controller
{
    public function drinkDetail(Drink $drink)
    {
        $sizes = Size::all();
        $toppings = topping::all();
        $drinks = Drink::all() -> where('categories_id', '=', $drink -> categories_id);
        $categories = Category::all() -> where('id', '=', $drink -> categories_id);
        return view('client/drink_detail/drinkDetail', [
            'drink' => $drink,
            'drinks' => $drinks,
            'sizes' => $sizes,
            'toppings' => $toppings,
            'categories' => $categories,
        ]);

    }
    public function store(Request $request, Drink $drink): \Illuminate\Http\RedirectResponse
    {
        if (Session::exists('cart')){
            $cart = Session::get('cart');
            if (isset($cart[$drink->id])){
                $cart[$drink->id]['quantity']++;
            } else {
                $cart = Arr::add($cart, $drink -> id, [
                    'drk_name' => $drink -> drk_name,
                    'drk_price' => $drink -> drk_price,
                    'size_id' => $request -> size_id,
                    'topping_id' => join(', ', $request -> topping_id),
                    'quantity' => 1
                ]);
            }
        } else{
            $cart = array();
            $cart = Arr::add($cart, $drink -> id, [
                'drk_name' => $drink -> drk_name,
                'drk_price' => $drink -> drk_price,
                'size_id' => $request -> size_id,
                'topping_id' => join(", ", $request -> topping_id),
                'quantity' => 1
            ]);
        }
        Session::put(['cart' => $cart]);
        $data = Session::all();
        return Redirect::route('cart.viewCart');
    }

}
