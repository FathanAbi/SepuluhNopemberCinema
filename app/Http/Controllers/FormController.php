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
            'Name' => 'required',
            'Phone' => 'required',
            'Email' => 'required',
            'Password' => 'required',
            'Confirm' => 'required',
            'gambar' => 'required|max:20480|mimes:jpg,png,jpeg'
        ]);

        
        

        $extension = $request->file('gambar')->extension();
        $filename = date('Y-m-d-H-i-s') . "." . $extension;

        $request->file('gambar')->storeAs('public/images', $filename);

        $request['gambar'] = $filename;
        User::create([
            "Name" => $request->Name,
            "Phone" => $request->Phone,
            "Email" => $request->Email,
            "Password" => Hash::make($request->Password),
            "Confirm" => $request->Confirm,
            "Gambar" => $filename,
        ]);

        
        return redirect('/allForm');
    }
}
