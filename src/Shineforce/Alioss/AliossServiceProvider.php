<?php

namespace Shineforce\Alioss;

use Illuminate\Support\ServiceProvider;

class AliossServiceProvider extends ServiceProvider
{
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
        $this->app->bindShared('oss', function() {
            return $this->app->make('Shineforce\Alioss\Oss');
        });
    }
}
