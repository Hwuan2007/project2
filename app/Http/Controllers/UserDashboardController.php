<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use App\Models\User;
use App\Models\UserDashboard;
use App\Http\Requests\StoreUserDashboardRequest;
use App\Http\Requests\UpdateUserDashboardRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = UserDashboard::with('receipt') -> get();
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
        $receipts = Receipt::all();
        return view('admin/user/add-user/create', [
            'receipts' => $receipts
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
        UserDashboard::create($request -> all());
        return Redirect::route('user.index');
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
        $receipts = Receipt::all();
        return view('user.edit', [
            'userDashboard' => $userDashboard,
            'receipts' => $receipts
        ]);
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
        $userDashboard -> update($request -> all());
        return Redirect::route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param UserDashboard $userDashboard
     * @return Response
     */
    public function destroy(UserDashboard $userDashboard)
    {
        $userDashboard -> delete();
        return Redirect::route('user.index');
    }
}
