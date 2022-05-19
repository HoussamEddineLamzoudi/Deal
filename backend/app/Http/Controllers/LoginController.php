<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages/login');
    }

    public function login(Request $request)
    {

        $this->validate($request, [

            'userEmail' => 'required|email',
            'userPassword' => 'required',
        ]);

        $user = [
            'email' => $request->userEmail,
            'password' => $request->userPassword,
        ];

        if (!auth()->attempt($user)) {
            return back()->with('status', 'Invalid login details');
        }

        return redirect()->route('offre');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
