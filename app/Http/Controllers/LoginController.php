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
            'username' => 'required|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/form');
        }


        return back()->with('LoginError','Login Failed');
    }

    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();     
        return redirect('/home');
    }
}
