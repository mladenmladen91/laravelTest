<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        \View::composer('admin.users.create',function($view){
            $view->with("groups",\App\Group::all());
        });
        
        \View::composer('admin.users.edit',function($view){
            $view->with("groups",\App\Group::all());
        });
    }
}
