<?php

namespace App\Providers;

use App\VisitorChecker;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use function foo\func;

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
        Schema::defaultStringLength(191);
        $this->app->singleton('Visitor', function($app){
            return new VisitorChecker();
        });
    }
}
