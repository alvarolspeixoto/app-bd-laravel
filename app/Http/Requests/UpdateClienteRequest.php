<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {

        
        $id = $this->route('cliente')->id_cliente;

        return [
            'nome_empresa' => 'string|max:60',
            'nome_pessoa' => 'string|max:60',
            'cpf' => "string|max:11|unique:Cliente,cpf,$id,id_cliente",
            'cnpj' => "string|max:14|unique:Cliente,cnpj,$id,id_cliente",
            'email' => "string|max:30|unique:Cliente,email,$id,id_cliente",
            'senha' => 'string|max:255',
            'tipo' => 'string'
        ];
    }
}
