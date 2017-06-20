<?php

namespace Ivwetg\ToastrTest;
use Illuminate\Support\ServiceProvider;

class ToastrTestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'ToastrTest');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/toastrtest'),
            __DIR__.'/config/toastr.php' => config_path('toastr.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ToastrTest',function ($app){
            return new ToastrTest($app['session'],$app['config']);
        });
    }
}
