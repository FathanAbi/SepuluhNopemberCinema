<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function index()
    {
        $datas = User::all();

        return view('detailAccount', ["datas" => $datas]);
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm' => 'required',
            'gambar' => 'required|max:20480|mimes:jpg,png,jpeg'
        ]);

        
        

        $extension = $request->file('gambar')->extension();
        $filename = date('Y-m-d-H-i-s') . "." . $extension;

        $request->file('gambar')->storeAs('public/images', $filename);
        
        $request['gambar'] = $filename;
        User::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "confirm" => $request->confirm,
            "gambar" => $filename,
        ]);

        
        return redirect('/allForm');
    }
}
