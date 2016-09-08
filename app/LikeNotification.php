<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeNotification extends Model
{
    //

protected $fillable=['article_id','user_id','mark_as_read','like_id'];
}
