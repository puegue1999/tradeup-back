<?php

namespace App\Services;

use App\Repositories\Interfaces\CepRepositoryInterface;
use App\Services\Interfaces\CepServiceInterface;

class CepService implements CepServiceInterface
{

    private CepRepositoryInterface $cepRepository;

    public function __construct(CepRepositoryInterface $cepRepository)
    {
        $this->cepRepository = $cepRepository;
    }

    /**
     * Chamada do CepRepository para receber o endereço;
     * Também elimina qualquer elemento na string que não seja um número;
     */
    public function showEndereco($cep)
    {
        $cep = preg_replace("/[^0-9]/", "", $cep);
        $endereco = $this->cepRepository->getEnderecoByCep($cep);

        return $endereco;
    }
}
