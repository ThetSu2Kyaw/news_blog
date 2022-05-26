<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    function register(){
        return view('blogs.register');
    }

    function store(){
        $formData = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:255'],
        ]);
        $user = User::create($formData);
        auth()->login($user);

        return redirect('/');
    }

    function login(){
        return view('blogs.login');
    }

    function post_login(){
        $formData = request()->validate([
            'email' => ['required', Rule::exists('users','email')],
            'password' => ['required', 'min:8']
        ]);
        auth()->attempt($formData);
        
        return redirect('/')->with('success', 'Welcome Back!');
    }
}
