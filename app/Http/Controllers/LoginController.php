<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('client/login/login');
    }
    public function checkLogin(Request $request){
        $account = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($account)){
            $employee = Auth::guard('admin')->user();
            Auth::guard('admin')->login($employee);
            Session::put('admin', $employee);
            if($employee->role_id == 1){
                return redirect()->route('dashboard.index');
            }else{
                return redirect()->route('client.index');
            }
        }else{
            return redirect()->route('login.login');
        }
    }
    public function logout(){
        Session::forget('user');
        return redirect()->route('login.login');
    }
}
