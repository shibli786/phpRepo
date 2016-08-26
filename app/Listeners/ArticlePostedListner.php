<?php

namespace App\Listeners;

use App\Events\ArticlePostedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ArticlePostedListner
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
     * @param  ArticlePostedEvent  $event
     * @return void
     */
    public function handle(ArticlePostedEvent $event)
    {
        //
    }
}
