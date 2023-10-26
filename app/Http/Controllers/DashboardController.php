<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;
use App\Models\User;
use App\Models\User_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all() -> count();
        $drinks = Drink::all() -> count();
        $users = User::all() -> count();
        return view('admin/dashboard/index', [
            'categories' => $categories,
            'drinks' => $drinks,
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand, Request $request)
    {

    }
}
