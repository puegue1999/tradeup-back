<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\BaseController;
use App\Services\Interfaces\CepServiceInterface;

class CepController extends BaseController
{

    private CepServiceInterface $cepService;

    public function __construct(CepServiceInterface $cepService)
    {
        $this->cepService = $cepService;
    }

    /**
     * Chamada do CepService para receber o endereço;
     * Testa se o cep foi enviado de forma correta até o back;
     * Devolve a resposta caso tenha sido um erro ou um sucesso;
     */
    public function showEndereco(Request $request): JsonResponse
    {
        if (empty($request->input('cep')) || !preg_match('/^\d{8}$/', $request->input('cep'))) {
            return $this->sendError('CEP enviado de forma incorreta.', ['error' => 'CEP enviado de forma incorreta'], 404);
        }

        $endereco = $this->cepService->showEndereco($request->input('cep'));

        if ($endereco['erro'] ?? false) {
            return $this->sendError('CEP enviado de forma incorreta.', ['error' => 'CEP enviado de forma incorreta'], 404);
        } else {
            return $this->sendResponse($endereco, 'Cep retornado.');
        }
    }
}
