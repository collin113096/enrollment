<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('grades', \App\Grade::all());
        View::share('teachers', \App\Teacher::all());

        Blade::component('component.index.add_button','add');
        Blade::component('component.index.edit_button','edit');
        Blade::component('component.index.delete_button','delete');

        Blade::component('component.non_index.number','number');
        Blade::component('component.non_index.select','select');
        Blade::component('component.non_index.text','text');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
