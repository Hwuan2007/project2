<?php

namespace App\Http\Controllers;

use App\Models\DrinkDetail;
use App\Http\Requests\StoreDrinkDetailRequest;
use App\Http\Requests\UpdateDrinkDetailRequest;

class DrinkDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client/drink_detail/index');
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
     * @param  \App\Http\Requests\StoreDrinkDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDrinkDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DrinkDetail  $drinkDetail
     * @return \Illuminate\Http\Response
     */
    public function show(DrinkDetail $drinkDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DrinkDetail  $drinkDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(DrinkDetail $drinkDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDrinkDetailRequest  $request
     * @param  \App\Models\DrinkDetail  $drinkDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDrinkDetailRequest $request, DrinkDetail $drinkDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DrinkDetail  $drinkDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(DrinkDetail $drinkDetail)
    {
        //
    }
}
