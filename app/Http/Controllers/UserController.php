<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(UserRequest $request)
    {
        $novoUsuario = $request->all();
        $novoUsuario['password'] = bcrypt($request->password);

        $novoUsuario = User::create($novoUsuario);

        Auth::login($novoUsuario);

        return redirect()->route('cliente.index');
    }
}
