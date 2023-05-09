<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function login(UserLoginRequest $request)
    {

        if(auth('web')->attempt($request->all()))
            return redirect(route('home'));
        else
            return redirect(route('login'))->withErrors(['login' => "ERRORS"]);
    }
}
