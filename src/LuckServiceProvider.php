<?php

namespace Wdq\Luck;

use Illuminate\Support\ServiceProvider;

class LuckServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/luck_config.php' => config_path('luck_config.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton('luck', function () {
            return new Luck();
        });
    }
}