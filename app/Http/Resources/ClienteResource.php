<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id_cliente' => $this->id_cliente,
            'nome' => $this->nome_pessoa ?? $this->nome_empresa,
            'tipo' => $this->tipo,
            'documento' => $this->cpf ?? $this->cnpj,
            'e-mail' => $this->email,
            'nota_fiscal' => $this->nota_fiscal_pag,
        ];
    }
}
