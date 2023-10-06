<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $obj = new Menu();
        $type_of_drink = $obj -> index();
        return view('admin/typeofdrink/index', [
            'type_of_drink' => $type_of_drink
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $objCategory = new Category();
        $category = $objCategory -> index();
        return view('admin/typeofdrink/add-typeofdrink/create', [
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMenuRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreMenuRequest $request)
    {
        $obj = new Menu();
        $obj -> type_name = $request -> type_name;
        $obj -> categories_id = $request -> categories_id;
        $obj -> store();
        return Redirect::route('typeofdrink.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuRequest  $request
     * @param  \App\Models\Menu  $menu
     * @return Response
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
