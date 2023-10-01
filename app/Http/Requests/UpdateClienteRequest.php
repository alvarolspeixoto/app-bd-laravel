<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClienteRequest extends FormRequest
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

        $rule = Rule::unique('Cliente')->ignore($this->id_cliente);

        return [
            "cpf" => Rule::unique('Cliente', 'cpf')->ignore($this->id_cliente),
            "cnpj" => $rule,
            "email" => Rule::unique('Cliente', 'email')->ignore($this->id_cliente),
        ];
    }
}
