<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CepController,
};

/**
 * api de convidado para usar cep/showEndereco;
 */
Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware' => 'guest'
], function () {
    Route::get('cep/showEndereco', 'CepController@showEndereco');
    Route::apiResource('cep', CepController::class);
});
