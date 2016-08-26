<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\User;
use Illuminate\Http\Request;

class LikeOnArticleEvent extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    public $islike;
   public $request;
    public $user;

    public function __construct($islike,$user,Request $request)
    {
        $this->islike=$islike;
        $this->user=$user;
        $this->request=$request;

    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
