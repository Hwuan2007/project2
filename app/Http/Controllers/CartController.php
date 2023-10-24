<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDrinkDetailRequest;
use App\Models\Drink;
use App\Models\DrinkDetail;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index() {
        return view('client/drink_detail/saveDrink');
    }

    public function addToCart(StoreDrinkDetailRequest $request, DrinkDetail $drink_detail)
    {
        $toppings = $request->input('topping');
        $sizes = $request ->input('size');
        // foreach($toppings as $topping){
        //     DrinkDetail::create($topping,$sizes);
        // }
        redirect()->route('cart.index');
    }

}
