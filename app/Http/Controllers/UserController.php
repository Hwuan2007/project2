<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\StoreUserDashboardRequest;
use App\Http\Requests\UpdateUserDashboardRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = User::with('role') -> get();
        return view('admin/user/index', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin/user/add-user/create', [
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserDashboardRequest $request
     * @return Response
     */
    public function store(StoreUserDashboardRequest $request)
    {
        User::create($request -> all());
        return Redirect::route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param User $userDashboard
     * @return Response
     */
    public function show(User $userDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $userDashboard
     * @return Response
     */
    public function edit(User $userDashboard)
    {
        $roles = Role::all();
        return view('admin/user/edit-user/user.edit', [
            'userDashboard' => $userDashboard,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserDashboardRequest $request
     * @param User $userDashboard
     * @return Response
     */
    public function update(UpdateUserDashboardRequest $request, User $userDashboard)
    {
        $userDashboard -> update($request -> all());
        return Redirect::route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $userDashboard
     * @return Response
     */
    public function destroy(User $userDashboard)
    {
        $userDashboard -> delete();
        return Redirect::route('user.index');
    }
}
