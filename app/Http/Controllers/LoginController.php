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

        if (Auth::guard('user')->attempt($account)){
            $employee = Auth::guard('user')->user();
            Auth::guard('user')->login($employee);
            Session::put('user', $employee);
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
