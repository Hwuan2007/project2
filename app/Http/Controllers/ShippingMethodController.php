<?php

namespace App\Http\Controllers;

use App\Models\shipping_method;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storeshipping_methodRequest;
use App\Http\Requests\Updateshipping_methodRequest;

class ShippingMethodController extends Controller
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
     * @param  \App\Http\Requests\Storeshipping_methodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeshipping_methodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shipping_method  $shipping_method
     * @return \Illuminate\Http\Response
     */
    public function show(shipping_method $shipping_method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shipping_method  $shipping_method
     * @return \Illuminate\Http\Response
     */
    public function edit(shipping_method $shipping_method)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateshipping_methodRequest  $request
     * @param  \App\Models\shipping_method  $shipping_method
     * @return \Illuminate\Http\Response
     */
    public function update(Updateshipping_methodRequest $request, shipping_method $shipping_method)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shipping_method  $shipping_method
     * @return \Illuminate\Http\Response
     */
    public function destroy(shipping_method $shipping_method)
    {
        //
    }
}
