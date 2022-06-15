<?php

namespace App\Http\Controllers\Auth;


use App\Models\Reminder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {
        $user = Auth::user();
        $user->tokens()->delete();
        $token = $user->createToken('apiAccessToken');

    }

    public function logout(Request $request) {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
