<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservaRequest extends FormRequest
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
            'data_inicio' => 'required|date',
            'data_entrega' => 'date',
            'data_previsao' => 'required|date',
            'nota_fiscal_pag' => 'numeric',
            'id_multa' => 'numeric|exists:Multa,id_multa',
            'placa_veiculo' => 'required|unique:Reserva|string|max:7|exists:Veiculo,placa',
            'id_cliente' => 'required|numeric|exists:Cliente,id_cliente',
        ];
    }
}
