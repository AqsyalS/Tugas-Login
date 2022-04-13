<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index ()
    {return view('register');}

    public function store (Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:8'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/login');
    }
}
