<?php

namespace FelixL7\LaravelIvw;

use Illuminate\Support\ServiceProvider;

class IvwServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../resources/config/config.php', 'ivw');

        $iam_data = new IvwIamData(
            config('ivw.st'),
            config('ivw.cp'),
            config('ivw.sv'),
            config('ivw.co')
        );
        $ivw = new Ivw($iam_data);

        if(config('ivw.enabled') === false) {
            $ivw->disable();
        }

        $this->app->instance('FelixL7\LaravelIvw\Ivw', $ivw);
        $this->app->alias('FelixL7\LaravelIvw\Ivw', 'ivw');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ivw');

        $this->publishes([
            __DIR__.'/../resources/config/config.php' => config_path('ivw.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/views/' => base_path('resources/views/vendor/ivw')
        ], 'views');

        $this->app['view']->creator(
            ['ivw::head', 'ivw::script'],
            'FelixL7\LaravelIvw\IvwViewCreator'
        );
    }
}
