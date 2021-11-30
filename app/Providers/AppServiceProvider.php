<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Layout;
use App\View\Components\Header;
use App\View\Components\Footer;
use App\View\Components\Book;
use App\View\Components\Slide;

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
        Blade::component('layout', Layout::class);
        Blade::component('header', Header::class);
        Blade::component('footer', Footer::class);
        Blade::component('book', Book::class);
        Blade::component('slide', Slide::class);
    }
}
