<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;

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

        $path = 'public/dashboard';
        View::share('css_path', $path.'/css');
        View::share('js_path', $path.'/js');
        View::share('img_path', $path.'/img');
        View::share('plugin_path', $path.'plugins');
        
    }
}