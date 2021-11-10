<?php

namespace doun\testing\;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Controller;
class TodolistServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->make('doun\testing\CalculatorController');
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         include __DIR__.'/routes.php';
    }
}
