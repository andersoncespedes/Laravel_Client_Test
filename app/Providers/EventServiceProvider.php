<?php

namespace App\Providers;
use App\Events\EmailEvent;
use App\Listeners\EmailNotification;
use App\Interface\IMailing;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
class EventServiceProvider extends ServiceProvider{
     /**
     * Register any application Event.
     */
    protected $listen =
    [
        Registered::class => [
            SendEmailVerificationNotification::class
        ],
        EmailEvent::class => [
            EmailNotification::class,
            IMailing::class
        ]
    ];
     /**
     * Bootstrap any application Event.
     */
    public function boot(){
    }
}
