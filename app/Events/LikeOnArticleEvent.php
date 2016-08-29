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

    public $isLike;
   public $request;
    public $user;
    public $like;

    public function __construct($islike,$user,$request,$like)
    {
        $this->isLike=$islike;
        $this->user=$user;
        $this->request=$request;
        $this->like=$like;

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
