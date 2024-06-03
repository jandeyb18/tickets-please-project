<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view ('auth.login');
    }

    public function store()
    {
        //dd(request()->all());

        $attributes = request()->validate([
            'email' => ['email', 'required'],
            'password' =>[Password::min(6)]
        ]);

        if (! Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, credentials do not match.'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/');
    }

    public function destroy() 
    {
        Auth::logout();

        return redirect('/');
    }
}
