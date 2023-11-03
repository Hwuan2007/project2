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
    public function searchByUserPhoneNumber(Request $request)
    {
        $phone = $request->phone;
        $receipts = Receipt::all();
        foreach ($receipts as $receipt){
            $receipt_details = DB::table('receipt_detail')
                -> join('receipt','receipt.id' ,'=', 'receipt_detail.receipt_id')
                -> join('drink_detail', 'receipt_detail.drink_detail_id', '=', 'drink_detail.id')
                -> join('drink', 'drink_detail.drk_id', '=', 'drink.id')
                -> join('size', 'drink_detail.size_id', '=', 'size.id')
                -> join('user', 'user.id', '=', 'receipt.user_id')
                -> join('shipping_method', 'shipping_method.id', '=', 'receipt.shipping_id')
                -> where('user.user_phonenumber', '=', $phone)
                -> where('receipt_id',$receipt -> id)
                -> get();
        }
        return view('/client/search/searchByUserPhoneNumber' ,[
            'receipts' => $receipts,
            'receipt_details' => $receipt_details,
        ]);
    }
    public function index()
    {
        return view('/client/search/index');
    }

}
