<?php

namespace App\Listeners;

use App\Events\LoginEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\LikeNotification;
use App\CommentNotification;
use Illuminate\Support\Facades\Auth;

class LoginListener
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
     * @param  LoginEvent  $event
     * @return void
     */
    public function handle(LoginEvent $event)
    {
        \Log::info("login event id fired");

           // $event->user->notifications()->get()->where()



         $like_notification=LikeNotification::where('article_id',Auth::user()->id)->where('mark_as_read','0')->get()->toArray();
          $comment_notification=CommentNotification::where('article_id',Auth::user()->id)->where('mark_as_read','0')->get()->toArray();

                
          $notifications=["like"=>$like_notification,'comments'=>$comment_notification];

        //dd($notifications);

        return $notifications;



    }
}
