<?php

namespace App\Http\Controllers;
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
        $sizes = Size::all();
        $phone = $request->phone;
        $receipts = DB::table('receipt')
        ->join('receipt_detail', 'receipt_detail.receipt_id', '=', 'receipt.id')
        ->join('user', 'user.id', '=', 'receipt.user_id')
        ->select('receipt_detail.*', 'receipt.*')
        ->where('user.user_phonenumber', '=', $phone)
        ->get();
        return view('/client/search/searchByUserPhoneNumber' ,[
            'receipts' => $receipts,
            'sizes' => $sizes,
        ]);
    }
    public function index()
    {
        return view('/client/search/index');
    }
}
