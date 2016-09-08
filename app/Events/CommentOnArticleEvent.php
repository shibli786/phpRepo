<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Article;
use App\Comment;
class CommentOnArticleEvent extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */


  public $comment;
  public $article;
    

    public function __construct(Comment $comment,$article)
    {
        $this->comment=$comment;
        $this->article=$article;
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
