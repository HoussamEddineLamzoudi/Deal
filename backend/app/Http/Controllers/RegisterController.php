<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('pages/register');
    }
    
    public function register(Request $request)
    {
        // dd($request->only('userEmail', 'userPassword'));
        $this->validate($request, [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'userName' => 'required|max:255',
            'userEmail' => 'required|email|max:255',
            'userPassword' => 'required|max:255',
        ]);

        User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'userName' => $request->userName,
            'email' => $request->userEmail,
            'password' => hash::make($request->userPassword),
        ]);

        return redirect()->route('login');

    }
}
