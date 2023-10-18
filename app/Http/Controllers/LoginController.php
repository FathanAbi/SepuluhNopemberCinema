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
            'Phone' => ['required'],
            'Password' => ['required'],
        ]);

    $phone = $credentials['Phone'];
    $password = $credentials['Password'];

    //    dd($phone);
    //    dd($password);

        if (Auth::attempt(['Phone' => $phone, 'Password' => $password])) {
            return redirect('/allForm');
            $request->session()->regenerate();
 
            return redirect('/allForm');
        }

        return redirect('/register');

        return back()->withErrors([
            'Phone' => 'The provided credentials do not match our records.',
        ])->onlyInput('Phone');
    }
}
