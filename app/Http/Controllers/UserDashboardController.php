<?php

namespace App\Http\Controllers;

use App\Models\UserDashboard;
use App\Http\Requests\StoreUserDashboardRequest;
use App\Http\Requests\UpdateUserDashboardRequest;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/user/index');
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
     * @param  \App\Http\Requests\StoreUserDashboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserDashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDashboard  $userDashboard
     * @return \Illuminate\Http\Response
     */
    public function show(UserDashboard $userDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDashboard  $userDashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDashboard $userDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserDashboardRequest  $request
     * @param  \App\Models\UserDashboard  $userDashboard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserDashboardRequest $request, UserDashboard $userDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDashboard  $userDashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDashboard $userDashboard)
    {
        //
    }
}
