<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ParserServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('Parser', 'app\Service\ParserService');
    }
    public function boot()
    {
        //
    }
}
