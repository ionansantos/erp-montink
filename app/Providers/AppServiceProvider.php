<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Dedoc\Scramble\Scramble;
use Illuminate\Routing\Route as RouteScramble;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

// para permitir usuarios admin
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //para ignorar as rotas padrao
        //Scramble::ignoreDefaultRoutes();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Scramble::configure()
            ->routes(function (RouteScramble $route) {
                return Str::startsWith($route->uri, 'api/');
            });
            
        //As rotas de documentação podem ser personalizadas fornecendo explicitamente os caminhos
        //  da rota usando o exposemétodo no objeto de configuração da documentação.
        //  Ele deve ser chamado no bootmétodo de um provedor de serviços
        // da pra expor apenas a UI ou o documento da API fornecendo apenas o document
      
        // Scramble::configure()
        //     ->expose(
        //         ui: '/docs/v1/api',
        //         document: '/docs/v1/openapi.json',
        //     );

        // apenas user admin
       
        // Gate::define('ViewApiDocs',  function(User $user){
        //     return in_array($user->email, ['admin@app.com']);
        // });

        //  para ambiente de prod
        
        //Scramble::viewApiDocsgate(fn() => true);

        Route::prefix('api')
        ->middleware('api')
        ->group(base_path('routes/api.php'));
    }
}
