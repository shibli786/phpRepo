<?php

namespace App\Listeners;

use App\Events\CommentOnArticleEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\CommentNotification;

class CommentOnArticleListner
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
     * @param  CommentOnArticleEvent  $event
     * @return void
     */
    public function handle(CommentOnArticleEvent $event)
    {
        //

        \Log::info("lisenter is called ");
       // \Log::info($event);
            \Log::info($event->comment);

            $notification=new CommentNotification;
            $notification->user_id=$event->comment->user_id;
            $notification->article_id=$event->comment->article_id;
            $notification->comment_id=$event->comment->id;
            $notification->mark_as_read=0;
            $notification->save();
            
            

    }
}
