<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy("id")->get();

        return view('cliente.index', ['clientes' => $clientes]);
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

    public function show(Cliente $cliente)
    {
        return view("cliente.show", ["cliente" => $cliente]);
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
