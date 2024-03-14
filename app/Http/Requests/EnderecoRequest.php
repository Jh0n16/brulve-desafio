<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnderecoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'logradouro' => 'required',
            'numero' => 'required|max:4',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required|max:2',
            'cep' => 'required|max:9',
        ];
    }

    public function messages()
    {
        return [
            'logradouro.required' => "O logradouro é obrigatório!",

            'numero.required' => "O número é obrigatorio!",
            'numero.max' => "O tamanho máximo de um número são 4 digitos",

            "bairro.required" => "O bairro é obrigatório!",

            "cidade.required" => "A cidade é obrigatória!",

            "estado.required" => "O estado é obrigatório!",
            "estado.max" => "O tamanho máximo de um estado são 2 digitos!",

            "cep.required" => "O CEP é obrigatório!",
            "cep.max" => "O tamanho máximo de um CEP são 9 digitos!",
        ];
    }
}
