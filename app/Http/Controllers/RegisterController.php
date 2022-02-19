<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title'=>'Register',
            'active'=>'register'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validatetData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        // $validatetData['password'] = bcrypt($validatetData['password']);
        $validatetData['password'] = Hash::make($validatetData['password']);

        User::create($validatetData);

        // $request->session()->flash('success', 'Registration succesfull! Please Login');

        return redirect('/login')->with('success', 'Registration succesfull! Please Login');
    }
}
