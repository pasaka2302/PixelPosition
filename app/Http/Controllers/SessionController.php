<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        // validate user input
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6)],
        ]);

        // attempt to authenticate the user
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, the provided creditials does not match our records!'
            ]);
        }

        $request->session()->regenerate();
        // redirect
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect('/register');
    }
}
