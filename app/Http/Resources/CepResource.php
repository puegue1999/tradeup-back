<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CepResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'bairro' => $this->bairro,
            'cep' => $this->cep,
            'complemento' => $this->complemento,
            'ddd' => $this->ddd,
            'gia' => $this->gia,
            'ibge' => $this->ibge,
            'localidade' => $this->localidade,
            'logradouro' => $this->logradouro,
            'saifi' => $this->saifi,
            'uf' => $this->uf,
        ];
    }
}
