<?php

namespace App\Http\Controllers;

use App\Models\checkOut;
use App\Http\Requests\StorecheckOutRequest;
use App\Http\Requests\UpdatecheckOutRequest;
use App\Models\Receipt;
use App\Models\shipping_method;
use App\Models\User;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = User::all();
        $sizes = Size::all();
        $receipts = Receipt::with('shipping_method') -> get();
        $shipping_methods = shipping_method::all();
        return view('client/cart/checkOut', [
            'sizes' => $sizes,
            'customers' => $customers,
            'receipts' => $receipts,
            'shipping_methods' => $shipping_methods
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecheckOutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecheckOutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\checkOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function show(checkOut $checkOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\checkOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function edit(checkOut $checkOut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecheckOutRequest  $request
     * @param  \App\Models\checkOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecheckOutRequest $request, checkOut $checkOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\checkOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(checkOut $checkOut)
    {
        //
    }
    public function check(Request $request){
        $user = $request->all();
        $user_id = User::create($user);
        $total=0;

        $order_id = Receipt::create([
            'total_price' => $total,
            'note'=> $user['note'],
            'user_id' => $user_id -> id,
            'shipping_id' => $user['shipping_id'] ,
            'receipt_status' => 'Đang chờ'

        ]);
        $cart=Session::get('cart');
        foreach ($cart as $cartItemKey => $cartItem){
            $total += ($cartItem['quantity'] * ($cartItem['drk_price'] + $cartItem['size_price']));
            DB::table('receipt_detail')->insert([
                'receipt_id' => $order_id['id'],
                'drink_detail_id' => $cartItem['drink_details'],
                'quantity' => $cartItem['quantity'],
                'price' => $total,
            ]);
        }
        Receipt::where('id', $order_id['id'])->update([
            'total_price' => $total,
        ]);
        Session::forget('cart');
        return redirect()->route('client.index');
    }
}
