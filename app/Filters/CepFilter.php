<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;


class CustomersFilter extends ApiFilter
{
    protected $safeParms = [
        'bairro' => ['eq'],
        'cep' => ['eq'],
        'complemento' => ['eq'],
        'ddd' => ['eq'],
        'gia' => ['eq'],
        'ibge' => ['eq'],
        'localidade' => ['eq'],
        'logradouro' => ['eq'],
        'saifi' => ['eq'],
        'uf' => ['eq'],
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}
