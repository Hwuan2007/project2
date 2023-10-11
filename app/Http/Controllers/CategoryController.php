<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $obj = new Category();
        $category = $obj ->index();
        return view('admin/categories/index', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin/categories/add-categories/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCategoryRequest $request
     * @return Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $obj = new Category();

        $obj -> categories_name = $request -> categories_name;
        $obj -> store();

        return Redirect::route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Category $category, Request $request)
    {
        $obj = new Category();
        $obj -> categories_id = $request -> categories_id;
        $category = $obj -> edit();
        return view('admin/categories/edit-categories/edit', [
            'category' => $category,
            'categories_id' => $obj -> categories_id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryRequest $request
     * @param Category $category
     * @return Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $obj = new Category();
        $obj->categories_id = $request -> categories_id;
        $obj->categories_name = $request -> categories_name;
        $obj->updateCategory();
        return Redirect::route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     */
    public function destroy(Category $category, Request $request)
    {
        $obj = new Category();
        $obj->categories_id = $request -> categories_id;
        $obj->deleteCategory();
        return Redirect::route('category.index');
    }
}
