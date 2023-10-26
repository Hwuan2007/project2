<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function viewCart(User $customer)
    {
        $customers = User::all();
        $sizes = Size::all();
        return view('client/cart/viewCart', [
            'sizes' => $sizes,
            'customers' => $customers
        ]);
    }
    public function deleteCart(Request $request): \Illuminate\Http\RedirectResponse
    {
        $cart = Session::get('cart');
        Arr::pull($cart, $request->id);
        Session::put(['cart' => $cart]);
        return Redirect::back();
    }
    public function storeCart(Request $request){
//        $cart = Session::get('cart');
//        if (Session::exists('customer')){
//            $customerCart = Session::get('customer');
//            if (isset($customerCart[$customer->id])){
//                $customerCart[$customer->id]['quantity']++;
//            } else {
//                $cart = Arr::add($cart, $drink -> id, [
//                    'drk_name' => $drink -> drk_name,
//                    'drk_price' => $drink -> drk_price,
//                    'size_id' => $request -> size_id,
//                    'topping_id' => join(', ', $request -> topping_id),
//                    'quantity' => 1
//                ]);
//            }
//        } else{
//            $cart = array();
//            $cart = Arr::add($cart, $drink -> id, [
//                'drk_name' => $drink -> drk_name,
//                'drk_price' => $drink -> drk_price,
//                'size_id' => $request -> size_id,
//                'topping_id' => join(", ", $request -> topping_id),
//                'quantity' => 1
//            ]);
//        }
//        Session::put(['cart' => $cart]);
//        return Redirect::route('cart.viewCart');
    }
}
