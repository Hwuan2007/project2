<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDrinkDetailRequest;
use App\Models\Drink;
use App\Models\DrinkDetail;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function viewCart()
    {
        $sizes = Size::all();
        return view('client/cart/viewCart', [
            'sizes' => $sizes
        ]);
    }
    public function deleteCart(Request $request){
        $cart = Session::get('cart');
        Arr::pull($cart, $request->id);
        Session::put(['cart' => $cart]);
        return Redirect::back();
    }
}
