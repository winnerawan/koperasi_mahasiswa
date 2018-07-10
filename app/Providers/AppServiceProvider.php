<?php

namespace App\Providers;

use App\Category;
use App\Payment;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $categories = Category::all();
//        view()->share('categories', $categories);
        $payments = Payment::all();
        view()->share('payments', $payments);
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
