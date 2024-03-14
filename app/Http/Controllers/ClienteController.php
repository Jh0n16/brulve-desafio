<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy("id")->get();

        return view('cliente.index', ['clientes' => $clientes]);
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

    public function edit(Cliente $cliente)
    {
        return view("cliente.edit", ["cliente" => $cliente]);
    }

    public function update(ClienteRequest $request, Cliente $cliente)
    {
        $request->validated();

        $cliente->update([
            "nome" => $request->nome,
            "sobrenome" => $request->sobrenome,
            "dataDeNascimento" => $request->dataDeNascimento,
            "email" => $request->email
        ]);

        return redirect()->route('cliente.index')->with("mensagem", "Detalhes do cliente de id={$cliente->id} alterados com sucesso!");
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('cliente.index')->with("mensagem", "Cliente excluido com sucesso!");
    }
}
