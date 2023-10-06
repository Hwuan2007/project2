<?php

namespace App\Http\Controllers;

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
        return view('admin/user/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
