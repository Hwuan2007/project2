<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/dashboard/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
//        $obj = new Brand();
//
//        $obj -> name = $request -> name;
//        $obj -> country = $request -> country;
//        $obj -> store();
//
//        return Redirect::route('brands.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand, Request $request)
    {
//        $obj = new Brand();
//        $obj -> id = $request -> id;
//        $brands = $obj -> edit();
//        return view('brands.edit', [
//            'brands' => $brands,
//            'id' => $obj -> id
//        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
//        $obj = new Brand();
//        $obj->id = $request -> id;
//        $obj->name = $request -> name;
//        $obj->country = $request -> country;
//        $obj->updateBrand();
//        return Redirect::route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand, Request $request)
    {
//        $obj = new Brand();
//        $obj->id = $request -> id;
//        $obj->deleteBrand();
//        return Redirect::route('brands.index');
    }
}
