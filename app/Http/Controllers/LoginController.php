<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function authenticate(Request $request) : RedirectResponse
    {
        $credentials = $request->validate([
            'Email' => 'required',
            'Password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/allForm');
        }

        return redirect('/login')
            ->withErrors(['error' => 'The provided credentials do not match our records.']);
    }
}
