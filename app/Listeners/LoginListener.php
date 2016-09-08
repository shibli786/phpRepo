<?php

namespace App\Listeners;

use App\Events\LoginEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\LikeNotification;
use App\CommentNotification;
use Illuminate\Support\Facades\Auth;
use App\Events\Listener;

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
    public function handle(Listener $event)
    {
        \Log::info("login event id fired");

           // $event->user->notifications()->get()->where()



         $like_notification=LikeNotification::where('owner_id',Auth::user()->id)->where('mark_as_read','0')->whereNotIn('user_id', [Auth::user()->id])->get()->toArray();
          $comment_notification=CommentNotification::where('owner_id',Auth::user()->id)->where('mark_as_read','0')->whereNotIn('user_id', [Auth::user()->id])->get()->toArray();
          \Log::info($like_notification);

        $likeCount=count($like_notification);
        $commentCount=count($comment_notification);
       //dd($like_notification);
         $notifications=["like"=>$like_notification,'comments'=>$comment_notification,'likeCount'=>$likeCount,'commentCount'=>$commentCount];

       // dd($notifications);

        return $notifications;



    }
}
