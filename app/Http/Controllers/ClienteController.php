<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('cliente.index');
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(ClienteRequest $request)
    {
        Cliente::create($request->all());

        return redirect()->route('cliente.index')->with("mensagem", "Cliente cadastrado com sucesso!");
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
