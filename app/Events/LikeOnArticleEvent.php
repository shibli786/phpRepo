<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\User;
use Illuminate\Http\Request;
use App\Article;

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
    public $article;

    public function __construct($islike,$user,$request,$like)
    {
        $this->isLike=$islike;
        $this->user=$user;
        $this->request=$request;
        $this->like=$like;
        $this->article=Article::find($request->article_id);

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
