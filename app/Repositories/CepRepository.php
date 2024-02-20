<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CepRepositoryInterface;

class CepRepository implements CepRepositoryInterface
{
    /**
     * Chamada da api externa http://viacep.com.br para receber os dados do endereço requisitados;
     */

    public function getEnderecoByCep($cep)
    {
        $url = "http://viacep.com.br/ws/$cep/json/";

        $response = file_get_contents($url);

        return json_decode($response, true);
    }
}
