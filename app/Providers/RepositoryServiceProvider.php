<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\MercadoPagoInterface;
use App\Repositories\Contracts\ProdutoInterface;
use App\Repositories\Contracts\VendaInterface;
use App\Repositories\Contracts\WebhookMercadoPagoInterface;
use App\Repositories\Eloquent\MercadoPagoRepository;
use App\Repositories\Eloquent\ProdutoRepository;
use App\Repositories\Eloquent\VendaRepository;
use App\Repositories\Eloquent\WebhookMercadoPagoRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            ProdutoInterface::class, 
            ProdutoRepository::class
        );
        
        $this->app->bind(
            VendaInterface::class, 
            VendaRepository::class
        );

        $this->app->bind(
            MercadoPagoInterface::class, 
            MercadoPagoRepository::class
        );

        $this->app->bind(
            WebhookMercadoPagoInterface::class, 
            WebhookMercadoPagoRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
