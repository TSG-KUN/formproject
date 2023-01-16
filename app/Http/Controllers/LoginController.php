<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('authentication.login', [
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request -> session() -> regenerate();
            return redirect() -> intended('/');
        }


        return back() -> with('LoginError','Login Failed');
    }
}
