<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome_empresa' => 'string|max:60',
            'nome_pessoa' => 'string|max:60',
            'cpf' => 'string|max:11|unique:Cliente',
            'cnpj' => 'string|max:14|unique:Cliente',
            'email' => 'required|string|max:30|unique:Cliente',
            'senha' => 'required|string|max:255',
            'tipo' => 'required|string'
        ];
    }
}
