<?php

namespace App\Http\Controllers;
use App\Models\Receipt;
use App\Models\Size;
use Illuminate\Support\Facades\DB;
use App\Models\Search;
use App\Http\Requests\StoreSearchRequest;
use App\Http\Requests\UpdateSearchRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
     * @param  \App\Http\Requests\StoreSearchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSearchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(Search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSearchRequest  $request
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSearchRequest $request, Search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
         //
    }

    public function search(){
    }
    public function searchByUserPhoneNumber(StoreSearchRequest $request)
    {
        $phone = $request->phone;

       $receipts = DB::table('receipt')
       ->join('receipt_detail', 'receipt_detail.receipt_id', '=', 'receipt.id')

       ->join('drink_detail', 'drink_detail.id', '=', 'receipt_detail.drink_detail_id')
       ->join('drink', 'drink_detail.drk_id', '=', 'drink.id')
       ->join('size', 'size.id', '=', 'drink_detail.size_id')
       ->join('user', 'user.id', '=', 'receipt.user_id')
       ->select('receipt_detail.receipt_id', 'receipt_detail.quantity','drink.drk_name','receipt.total_price','size.*','receipt.receipt_status')
       ->where('user.user_phonenumber', '=', $phone)
       ->get();
        $receipts = Receipt::all();
        return view('/client/search/searchByUserPhoneNumber' ,[
            'receipts' => $receipts,
            'phone' => $phone,
        ]);
    }
    public function index()
    {
        return view('/client/search/index');
    }

}
