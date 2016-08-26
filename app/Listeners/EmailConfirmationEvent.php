<?php

namespace App\Listeners;

use App\Events\EmailConfirmationEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailConfirmationEvent
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EmailConfirmationEvent  $event
     * @return void
     */
    public function handle(EmailConfirmationEvent $event)
    {
        //
    }
}
