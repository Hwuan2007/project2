<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Receipt;
use App\Models\ReceiptDetail;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $receipts = Receipt::all();
        return view('admin/order/index', [
            'receipts' => $receipts
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
    public function detail(Receipt $receipt){
        $receiptsDetails = ReceiptDetail::all()-> where('receipt_id', '=', $receipt -> id);
        $users = User::all()-> where('id', '=', $receipt -> user_id);
        return view('admin/order/order_details/detail',[
            'receipt' => $receipt,
            'users' => $users,
            'receiptsDetails' => $receiptsDetails
        ]);
    }
    public function accept($id) {
        $receipt = Receipt::find($id);
        $receipt->receipt_status = 'ĐÃ XÁC NHẬN';
        $receipt->save();
        return back();
   
    }
    
    public function cancelAccept($id) {
        $receipt = Receipt::find($id);
        $receipt->receipt_status = 'Đang chờ';
        $receipt->save();
        return back();
    }
    
    public function cancel($id) {
        $receipt = Receipt::find($id);
        $receipt->receipt_status = 'ĐÃ HỦY';
        $receipt->save();
        return back();
    }
}
