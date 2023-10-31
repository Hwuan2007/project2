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
        $drinkDetails = DB::table('size')
            -> join('drink_detail', 'size.id' , '=', 'drink_detail.size_id')
            -> select('size.*','drink_detail.*')
            -> where('drk_id', $drink -> id)
            -> get();
        $categories = Category::all() -> where('id', '=', $drink -> categories_id);
        $drink_categories = Drink::all() -> where('categories_id', '=', $drink -> categories_id);
        return view('client/drink_detail/drinkDetail', [
            'drink' => $drink,
            'sizes' => $sizes,
            'categories' => $categories,
            'drinkDetails' => $drinkDetails,
            'drink_categories' => $drink_categories,
        ]);

    }
    public function store(Request $request, Drink $drink): \Illuminate\Http\RedirectResponse
    {
        $drink_detail = DrinkDetail::all() -> where('drk_id', '=', $drink -> id);
        // dd($request);
        $cart_id = $drink -> id;
        if (Session::exists('cart')){
            $cart = Session::get('cart');
            if (isset($cart[$cart_id])){
                $cart[$cart_id]['quantity']++;
            } else {
                $cart = Arr::add($cart, $cart_id, [
                    'id' => $cart_id,
                    'drk_name' => $drink -> drk_name,
                    'drk_price' => $drink -> drk_price,
                    'size_id' => $request -> size_id,
                    'quantity' => 1
                ]);
            }
        } else{
            $cart = array();
            $cart = Arr::add($cart, $cart_id, [
                'id' => $cart_id,
                'drk_name' => $drink -> drk_name,
                'drk_price' => $drink -> drk_price,
                'size_id' => $request -> size_id,
                'quantity' => 1
            ]);
        }
        Session::put(['cart' => $cart]);
        return Redirect::route('cart.viewCart');
    }

}
