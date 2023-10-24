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
        return view('client/drink_detail/drinkDetail', [
            'drink' => $drink,
            'sizes' => $sizes,
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
                    'topping' => join(",", $request -> topping),
                    'quantity' => 1
                ]);
            }
        } else{
            $cart = array();
            $cart = Arr::add($cart, $drink -> id, [
                'drk_name' => $drink -> drk_name,
                'drk_price' => $drink -> drk_price,
                'size_id' => $request -> size_id,
                'topping' => join(", ", $request -> topping),
                'quantity' => 1
            ]);
        }
        Session::put(['cart' => $cart]);
        return Redirect::route('cart.viewCart');
    }
}
