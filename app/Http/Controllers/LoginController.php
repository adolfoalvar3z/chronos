<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function showLogin()
    {
        return view('login');
    }

    public function forgetPassword()
    {
        return view('olvidaclave');
    }

    public function register()
    {
        return view('solicitaregistro');
    }
    public function doLogin()
    {
        return view('marcaje');
    }
}
