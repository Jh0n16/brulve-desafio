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

    public function store(EnderecoRequest $request, Cliente $cliente)
    {
        
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
