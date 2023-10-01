<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_reserva,
            'id_cliente' => $this->id_cliente,
            'placa_veiculo' => $this->placa_veiculo,
            'id_multa' => $this->id_multa,
            'data_inicio' => $this->data_inicio,
            'data_previsao' => $this->data_previsao,
            'nota_fiscal_pag' => $this->nota_fiscal_pag,
            
        ];
    }
}
