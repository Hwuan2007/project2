<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Http\Requests\StoreDrinkRequest;
use App\Http\Requests\UpdateDrinkRequest;
use Illuminate\Http\Response;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin/drink/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin/drink/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDrinkRequest $request
     * @return Response
     */
    public function store(StoreDrinkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Drink $drink
     * @return Response
     */
    public function show(Drink $drink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Drink $drink
     * @return Response
     */
    public function edit(Drink $drink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDrinkRequest $request
     * @param Drink $drink
     * @return Response
     */
    public function update(UpdateDrinkRequest $request, Drink $drink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Drink $drink
     * @return Response
     */
    public function destroy(Drink $drink)
    {
        //
    }
}
