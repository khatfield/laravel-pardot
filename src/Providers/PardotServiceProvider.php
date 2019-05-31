<?php


namespace Khatfield\LaravelPardot\Providers;


use Illuminate\Support\ServiceProvider;
use Khatfield\LaravelPardot\Pardot;

class PardotServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $config = realpath(__DIR__ . '/..') . '/config/pardot.php';
        $this->mergeConfigFrom($config, 'pardot');

        $this->app->singleton(Pardot::class, function($app)
        {
            $pardot = new Pardot();
            $pardot->connect($app['config']);

            return $pardot;
        });

        $this->app->alias(Pardot::class, 'pardot');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $config = realpath(__DIR__ . '/..') . '/config/pardot.php';
        $this->publishes(
            [
                $config => config_path('pardot.php'),
            ], 'pardot-config');
    }

    public function provides()
    {
        return ['pardot', Pardot::class];
    }
}