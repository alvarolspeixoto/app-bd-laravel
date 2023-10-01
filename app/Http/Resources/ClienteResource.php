<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            // 'nome' => $this->nome_pessoa ?? $this->nome_empresa,
            'nomep' => $this->nome_pessoa,
            'nomeemp' => $this->nome_empresa,
            'id_cliente' => $this->id_cliente,
            'documento' => $this->cpf ?? $this->cnpj,
            'e-mail' => $this->email,
            'tipo' => $this->tipo,
            'nota_fiscal' => $this->nota_fiscal_pag,
        ];
    }
}
