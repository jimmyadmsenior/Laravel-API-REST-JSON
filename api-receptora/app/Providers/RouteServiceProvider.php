<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Diretório padrão para redirecionamentos.
     */
    public const HOME = '/home';

    /**
     * Aqui o Laravel define quais arquivos de rotas usar.
     */
    public function boot(): void
    {
        $this->routes(function () {
            // Rotas da API com prefixo /api
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            // Rotas web normais
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}