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
// <<<<<<< HEAD

//     public function index() {
//         return view('client/drink_detail/saveDrink');
//     }

//     public function addToCart(StoreDrinkDetailRequest $request, DrinkDetail $drink_detail)
//     {
//         $toppings = $request->input('topping');
//         $sizes = $request ->input('size');
//         // foreach($toppings as $topping){
//         //     DrinkDetail::create($topping,$sizes);
//         // }
//         redirect()->route('cart.index');
//     }

// =======
    public function viewCart()
    {
        return view('client/cart/viewCart');
    }
    public function deleteCart(Request $request){
        $cart = Session::get('cart');
        Arr::pull($cart, $request->id);
        return Redirect::back();
    }
// >>>>>>> ef9ef73ed0cb837b5d58855497eb8900e0f2f814
}
