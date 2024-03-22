<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interface\IUnitOfWork;
use App\Interface\IMailing;
use App\Services\Mailing;

use App\UnitOfWork\UnitOfWork;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IUnitOfWork::class, UnitOfWork::class);
        $this->app->bind(IMailing::class,Mailing::class );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        Paginator::defaultView('pagination::bootstrap-4');
        Paginator::defaultSimpleView('pagination::simple-bootstrap-4');
    }
}
