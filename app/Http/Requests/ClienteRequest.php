<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            "nome" => "required",
            "sobrenome" => "required",
            "tipo" => "required",
            "dataDeNascimento" => "required",
            "email" => "required",

        ];
    }

    public function messages(): array
    {
        return [
            "nome.required" => "O nome é obrigatório!",
            "sobrenome.required" => "O sobrenome é obrigatório!",
            "dataDeNascimento.required" => "A data de nascimento é obrigatória!",
            "email.required" => "O email é obrigatório!",
            "tipo.required" => "O tipo de cliente é obrigatório!"
        ];
    }
}
