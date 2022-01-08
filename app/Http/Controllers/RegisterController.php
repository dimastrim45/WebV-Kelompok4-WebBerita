<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    // public function store(){
    //     return request()->all();
    // }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:5', 'max:100', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd('Registrasi Berhasil');
        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi berhasil! Silahkan Login');
        return redirect('/login');
    }
}
