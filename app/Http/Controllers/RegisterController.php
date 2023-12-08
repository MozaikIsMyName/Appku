<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'student' => 'register'
        ]);
    }

    public function store(request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:user',
            'username' => 'required|min:6|max:100|unique:user',
            'email' => 'required|email|unique:user',
            'password' => 'required',
        ]);

        dd('registrasi berhasil!!');
    }
}
