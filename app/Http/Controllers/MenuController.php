<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $menus = Menu::with('category') -> get();
        return view('admin/typeofdrink/index', [
            'menus' => $menus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin/typeofdrink/add-typeofdrink/create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMenuRequest $request
     * @return RedirectResponse
     */
    public function store(StoreMenuRequest $request)
    {
        Menu::create($request -> all());
        return Redirect::route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Menu $menu
     * @return void
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Menu $menu
     */
    public function edit(Menu $menu, Request $request)
    {
        $categories = Category::all();
        return view('admin/typeofdrink/edit-typeofdrink/edit', [
            'menu' => $menu,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMenuRequest $request
     * @return RedirectResponse
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu -> update($request ->all());
        return Redirect::route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Menu $menu
     */
    public function destroy(Menu $menu)
    {
        $menu -> delete();
        return Redirect::route('menu.index');
    }
}
