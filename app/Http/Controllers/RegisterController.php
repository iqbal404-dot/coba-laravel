<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            "judul" => "Registasi",
            "css" => "login"
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:20',
            'username' => 'required|min:5|max:15|unique:users',
            'status' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:15'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan Login');

    }
}
