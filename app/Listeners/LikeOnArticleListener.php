<?php

namespace App\Listeners;

use App\Events\LikeOnArticleEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\LikeNotification;

class LikeOnArticleListener
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
     * @param  LikeOnArticleEvent  $event
     * @return void
     */
    public function handle(LikeOnArticleEvent $event)
    {




            \Log::info("like listener is called");
            $notification=new LikeNotification;
        
            if($event->isLike){
            $notification->like_id=$event->like->id;
            $notification->user_id=$event->user->id;
            $notification->article_id=$event->request->article_id;
            $notification->mark_as_read=0;
            $notification->owner_id=$event->article->user()->get()->first()->id;
            $notification->save();



            }

           
            
    }
}
