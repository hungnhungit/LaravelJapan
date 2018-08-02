<?php

namespace App\Providers;

use App\AppLaravel;
use App\Facade\LaraJapan;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loader = AliasLoader::getInstance();

        $loader->alias('AppLaravel', LaraJapan::class);
        $this->app->singleton('LaraJapan', function () {
            return new AppLaravel();
        });

        $this->loadHelpers();
        $this->registerConfigs();

    }
    protected function loadHelpers()
    {
        foreach (glob(__DIR__.'/Helpers/*.php') as $filename) {
            require_once $filename;
        }
    }

    public function registerConfigs()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/Config/config.php', 'LaraJapan'
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
