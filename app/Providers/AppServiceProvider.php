<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\Paginator as PaginationPaginator;
use Illuminate\Pagination\Paginator as IlluminatePaginationPaginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Pagination\Paginator;

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
        IlluminatePaginationPaginator::useBootstrap();
    }
}
