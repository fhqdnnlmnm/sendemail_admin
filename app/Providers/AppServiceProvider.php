<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Factory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('Faker\Generator',function(){
            return Factory::create($locale = "zh_CN");
        });
    }
}
