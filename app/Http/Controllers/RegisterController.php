<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    //simpan data
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:25', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'role' => 'required'
        ]);

        //enkripsi password
        // $validatedData['password'] = bcrypt($validatedData['passwprd']);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        //pindah halaman
        // $request->session()->flash('success', 'Registrasi Berhasil, silakan login');
        return redirect('/login')->with('success', 'Registrasi Berhasil, silakan login');
    }
}