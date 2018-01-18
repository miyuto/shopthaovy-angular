<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cart;
use App\Slides;
use App\Categories;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function ($view){
            $countProduct = Cart::count();
            $totalPrice = Cart::total(0,'.',',');
            $view->with(['countPrice'=>$countProduct,'totalPrice'=>$totalPrice]);
        });

        view()->composer('pages.index',function ($view){
            $categories = Categories::all();
            $slides = Slides::all();
            $view->with(['categories'=>$categories,'slides'=>$slides]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Here', 'test');
        $this->app->bind('\App\There', 'test');
    }
}
