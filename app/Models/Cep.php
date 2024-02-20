<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cep extends Model
{

    /**
     * Criação de um fillable caso Cep acabe se tornando uma tabela no futuro;
     */

    protected $fillable = [
        'bairro',
        'cep',
        'complemento',
        'ddd',
        'gia',
        'ibge',
        'localidade',
        'logradouro',
        'saifi',
        'uf',
    ];

    protected $hidden = [];

    protected $casts = [];
}
