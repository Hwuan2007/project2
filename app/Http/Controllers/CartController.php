<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use App\Models\shipping_method;
use App\Models\User;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function viewCart()
    {
        $customers = User::all();
        $sizes = Size::all();
        $receipts = Receipt::with('shipping_method') -> get();
        $shipping_methods = shipping_method::all();
        return view('client/cart/viewCart', [
            'sizes' => $sizes,
            'customers' => $customers,
            'receipts' => $receipts,
            'shipping_methods' => $shipping_methods
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
        $user = $request->all();
        $user_id = User::create($user);
        $price = 0;
        foreach ((array) session('cart') as $drink => $details){
            $price +=$details['size_price'] + $details['quantity'] * $details['drk_price'];
        }
        $order_id = Receipt::create([
            'total_price' => $price,
            'user_id' => $user_id['id'],
            'note' =>  $user['note'],
            'shipping_id' =>  $user['shipping_id'],
            'receipt_status' =>  $user['receipt_status']
        ]);
        foreach ((array) session('cart') as $drink => $details){
            $total_price = $price + 18000;
            DB::table('receipt_detail')->insert([
                'receipt_id' => $order_id['id'],
                'drink_detail_id' => $details['drink_details'],
                'quantity' => $details['quantity'],
                'price' => $total_price,
            ]);
        }
        Session::forget('cart');
        return redirect()->route('client.index');
    }
    public function updateCart(Request $request){
        $cart = Session::get('cart');
        foreach($request -> input('quantity') as $cart_id => $quantity){
            $cart[$cart_id]['quantity'] = $quantity;

        }
        Session::put(['cart' => $cart]);
        return Redirect::route('cart.viewCart');
    }

}
