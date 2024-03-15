<?php

namespace App\Http\Controllers;
use App\Http\Requests\EnderecoRequest;
use App\Models\Cliente;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function index(Cliente $cliente)
    {   
        $enderecos = Endereco::orderBy("id")->where("cliente_id", $cliente->id)->get();
        
        return view('endereco.index', ["cliente" => $cliente, "enderecos" => $enderecos]);
    }

    public function store(EnderecoRequest $request)
    {
        Endereco::create($request->all());

        return redirect()->route("endereco.index", ["cliente" => $request->cliente_id])->with("mensagem", "Endereço cadatrado com sucesso!");
    }

    public function edit(Endereco $endereco)
    {
        return view("endereco.edit", ["endereco" => $endereco]);
    }

    public function update(EnderecoRequest $request, Endereco $endereco)
    {
        $request->validated();
        $endereco->update($request->all());

        return redirect()->route("endereco.index", ['cliente' => $endereco->cliente_id])->with("mensagem", "Endereço alterado com sucesso!");
    }

    public function destroy(Endereco $endereco)
    {   
        $clienteId = $endereco->cliente_id;
        $endereco->delete();

        return redirect()->route("endereco.index", ['cliente' => $clienteId])->with("mensagem", "Endereço deletado com sucesso!");
    }
}
