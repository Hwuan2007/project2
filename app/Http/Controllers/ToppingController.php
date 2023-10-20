<?php

namespace App\Http\Controllers;

use App\Models\topping;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoretoppingRequest;
use App\Http\Requests\UpdatetoppingRequest;

class ToppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoretoppingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretoppingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\topping  $topping
     * @return \Illuminate\Http\Response
     */
    public function show(topping $topping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\topping  $topping
     * @return \Illuminate\Http\Response
     */
    public function edit(topping $topping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetoppingRequest  $request
     * @param  \App\Models\topping  $topping
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetoppingRequest $request, topping $topping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\topping  $topping
     * @return \Illuminate\Http\Response
     */
    public function destroy(topping $topping)
    {
        //
    }
}
