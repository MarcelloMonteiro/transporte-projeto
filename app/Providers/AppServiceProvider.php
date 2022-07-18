<?php

namespace App\Providers;

use App\Models\CategoriaHabilitacao;
use App\Models\Combustivel;
use App\Models\Cor;
use App\Models\Modelo;
use App\Models\Montadora;
use App\Models\Perfil;
use App\Models\Permissao;
use App\Models\Situacao;
use App\Models\TipoSituacao;
use App\Models\TipoVeiculo;
use App\Models\User;
use App\Models\Veiculo;
use App\Observers\CategoriaHabilitacaoObserver;
use App\Observers\CombustivelObserver;
use App\Observers\CorObserver;
use App\Observers\ModeloObserver;
use App\Observers\MontadoraObserver;
use App\Observers\PerfilObserver;
use App\Observers\PermissaoObserver;
use App\Observers\SituacaoObserver;
use App\Observers\TipoSituacaoObserver;
use App\Observers\TipoVeiculoObserver;
use App\Observers\UserObserver;
use App\Observers\VeiculoObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Perfil::observe(PerfilObserver::class);
        Permissao::observe(PermissaoObserver::class);
        User::observe(UserObserver::class);
        CategoriaHabilitacao::observe(CategoriaHabilitacaoObserver::class);
        TipoVeiculo::observe(TipoVeiculoObserver::class);
        Montadora::observe(MontadoraObserver::class);
        Modelo::observe(ModeloObserver::class);
        TipoSituacao::observe(TipoSituacaoObserver::class);
        Situacao::observe(SituacaoObserver::class);
        Veiculo::observe(VeiculoObserver::class);
        Combustivel::observe(CombustivelObserver::class);
        Cor::observe(CorObserver::class);

        $this->app['request']->server->set('HTTPS', $this->app->environment() != 'local');

        Paginator::useBootstrap();

    }
}
