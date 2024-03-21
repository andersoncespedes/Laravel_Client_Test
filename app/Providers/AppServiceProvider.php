<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interface\IUnitOfWork;
use App\UnitOfWork\UnitOfWork;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IUnitOfWork::class, UnitOfWork::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
