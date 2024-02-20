<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\CepRepositoryInterface;
use App\Repositories\CepRepository;
use App\Services\Interfaces\CepServiceInterface;
use App\Services\CepService;
use App\Models\Cep;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CepRepositoryInterface::class, function ($app) {
            return new CepRepository(new Cep);
        });

        $this->app->bind(CepServiceInterface::class, function ($app) {
            return new CepService(new CepRepository);
        });
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
