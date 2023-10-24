<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDrinkDetailRequest;
use App\Models\Drink;
use App\Models\DrinkDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function viewCart()
    {
        return view('client/cart/viewCart');
    }
    public function deleteCart(Request $request){
        $cart = Session::get('cart');
        Arr::pull($cart, $request->id);
        return Redirect::back();
    }
}
