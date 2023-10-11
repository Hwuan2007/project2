<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDashboard;
use App\Http\Requests\StoreUserDashboardRequest;
use App\Http\Requests\UpdateUserDashboardRequest;
use Illuminate\Http\Response;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $obj = new UserDashboard();
        $staff = $obj -> index();
        return view('admin/user/index', [
            'staff' => $staff
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin/user/add-user/create');
//        $objBrand = new Brand();
//        $brands = $objBrand -> index();
//        return view('products.create', [
//            'brands' => $brands
//        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserDashboardRequest $request
     * @return Response
     */
    public function store(StoreUserDashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param UserDashboard $userDashboard
     * @return Response
     */
    public function show(UserDashboard $userDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param UserDashboard $userDashboard
     * @return Response
     */
    public function edit(UserDashboard $userDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserDashboardRequest $request
     * @param UserDashboard $userDashboard
     * @return Response
     */
    public function update(UpdateUserDashboardRequest $request, UserDashboard $userDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param UserDashboard $userDashboard
     * @return Response
     */
    public function destroy(UserDashboard $userDashboard)
    {
        //
    }
}
