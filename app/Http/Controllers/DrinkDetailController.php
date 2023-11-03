<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;
use App\Models\DrinkDetail;
use App\Http\Requests\DrinkDetailRequest;
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
        $categories = Category::all() -> where('id', '=', $drink -> categories_id);
        $drink_categories = Drink::all() -> where('categories_id', '=', $drink -> categories_id);
        return view('client/drink_detail/drinkDetail', [
            'drink' => $drink,
            'sizes' => $sizes,
            'categories' => $categories,
            'drink_categories' => $drink_categories,
        ]);

    }
    public function store(DrinkDetailRequest $request, Drink $drink): \Illuminate\Http\RedirectResponse
    {
        DB::table('drink_detail') -> insert([
            'size_id' => $request -> size_id,
            'drk_id' => $drink -> id,
        ]);
        $size_id = $request->input('size_id');
        $drink_details = DB::table('drink_detail')
            -> join('size', 'drink_detail.size_id', '=', 'size.id')
            -> join('drink', 'drink_detail.drk_id', '=', 'drink.id')
            -> where('drk_id', $drink -> id)
            -> where('size_id', $size_id)
            -> select( 'drink_detail.*','drink.*', 'size.*')
            -> first();
        $drink_details_id = DB::table('drink_detail')
            -> join('size', 'drink_detail.size_id', '=', 'size.id')
            -> join('drink', 'drink_detail.drk_id', '=', 'drink.id')
            -> where('drk_id', $drink -> id)
            -> where('size_id', $size_id)
            -> select( 'drink_detail.*')
            -> first();

        $cart_id = $drink -> id . '-' . $size_id;
        if(Session::has('cart')){
            $cart = Session::get('cart');
        }
        else{
            $cart = array();
        }
        if(array_key_exists($cart_id, $cart )){
            $cart[$cart_id]['quantity']++;
        }else{
            $cart = Arr::add($cart, $cart_id, [
                'id' => $cart_id,
                'drk_name' => $drink -> drk_name,
                'drk_price' => $drink -> drk_price,
                'size_id' => $size_id,
                'size_price' => $drink_details -> size_price,
                'drink_details' => $drink_details_id -> id,
                'quantity' => 1
            ]);
        }


        Session::put(['cart' => $cart]);
        return Redirect::route('cart.viewCart');
    }

}
