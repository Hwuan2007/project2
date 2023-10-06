<?php

namespace App\Http\Controllers;

use App\Models\DrinkClient;
use App\Http\Requests\StoreDrinkClientRequest;
use App\Http\Requests\UpdateDrinkClientRequest;

class DrinkClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client/menu/index');
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
     * @param  \App\Http\Requests\StoreDrinkClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDrinkClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DrinkClient  $drinkClient
     * @return \Illuminate\Http\Response
     */
    public function show(DrinkClient $drinkClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DrinkClient  $drinkClient
     * @return \Illuminate\Http\Response
     */
    public function edit(DrinkClient $drinkClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDrinkClientRequest  $request
     * @param  \App\Models\DrinkClient  $drinkClient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDrinkClientRequest $request, DrinkClient $drinkClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DrinkClient  $drinkClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(DrinkClient $drinkClient)
    {
        //
    }
}
