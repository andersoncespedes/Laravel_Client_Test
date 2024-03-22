<?php

namespace App\Listeners;

use App\Events\EmailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Interface\IMailing;

class EmailNotification
{
    /**
     * Create the event listener.
     */
    private IMailing $_mail;
    public function __construct(IMailing $mail)
    {
        $this->_mail = $mail;
    }

    /**
     * Handle the event.
     */
    public function handle(EmailEvent $event ): void
    {
        $this->_mail->SendRegisterMail($event->email);
    }
}
