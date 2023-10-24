<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;
use App\Http\Requests\StoreDrinkRequest;
use App\Http\Requests\UpdateDrinkRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $drinks = Drink::with('category') -> get();
        return view('admin/drink/index', [
            'drinks' => $drinks
        ]);
    }

    /**
     * Show the form for creating a new resource.

     */
    public function create()
    {
        $categories = Category::all();
        return view('admin/drink/add-drink/create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDrinkRequest $request
     * @return Response
     */
    public function store(StoreDrinkRequest $request)
    {
        $drk_img = $request -> file('drk_img') -> getClientOriginalName();
        if (!Storage::exists('public/Admin/'.$drk_img)){
            Storage::putFileAs('/public/Admin/', $request -> file('drk_img'), $drk_img);
        }
        $array = [];
        $array = Arr::add($array, 'drk_name', $request -> drk_name);
        $array = Arr::add($array, 'drk_img', $drk_img);
        $array = Arr::add($array, 'drk_price', $request -> drk_price);
        $array = Arr::add($array, 'categories_id', $request -> categories_id);
        $array = Arr::add($array, 'drk_description', $request -> drk_description);
        Drink::create($array);

        return Redirect::route('drink.index');
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
        $categories = Category::all();
        return view('admin/drink/edit-drink/edit', [
            'drink' => $drink,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDrinkRequest $request
     * @param Drink $drink
     */
    public function update(UpdateDrinkRequest $request, Drink $drink)
    {
        if ($request -> file('drk_img') != null){
            $drk_img = $request -> file('drk_img') -> getClientOriginalName();
        }else{
            $drk_img = $drink -> drk_img;
        }
        if (!Storage::exists('public/Admin/'.$drk_img)){
            Storage::putFileAs('/public/Admin/', $request -> file('drk_img'), $drk_img);
        }
        $array = [];
        $array = Arr::add($array, 'drk_name', $request -> drk_name);
        $array = Arr::add($array, 'drk_img', $drk_img);
        $array = Arr::add($array, 'drk_price', $request -> drk_price);
        $array = Arr::add($array, 'categories_id', $request -> categories_id);
        $array = Arr::add($array, 'drk_description', $request -> drk_description);
        $drink -> update($array);
        return Redirect::route('drink.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Drink $drink
     */
    public function destroy(Drink $drink)
    {
        $drink -> delete();
        return Redirect::route('drink.index');
    }

}
