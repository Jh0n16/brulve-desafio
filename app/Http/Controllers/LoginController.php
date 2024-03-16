<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function auth(LoginRequest $request)
    {
        $credeciais = $request->validated();
        
        if(Auth::attempt($credeciais)) {
            $request->session()->regenerate();

            return redirect()->intended('clientes/');

        } else 
            return redirect()->back()->with("mensagem", "Email ou Password inválidos.");

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.login');
    }

    public function create()
    {
        return view('login.create');
    }
}
