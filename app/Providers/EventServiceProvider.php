<?php

namespace App\Providers;
use App\Events\EmailEvent;
use App\Listeners\EmailNotification;
use App\Interface\IMailing;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
class EventServiceProvider extends ServiceProvider{
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
    public function boot(){
        parent::boot();
    }
}
