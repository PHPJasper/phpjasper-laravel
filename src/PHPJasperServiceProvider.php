<?php

namespace PHPJasper;

use Illuminate\Support\ServiceProvider;

class PHPJasperServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('PHPJasper', function ($app)
        {
            return new PHPJasper;
        });
    }
}
