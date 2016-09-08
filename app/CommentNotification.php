<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentNotification extends Model
{



	protected $fillable=['article_id','user_id','mark_as_read','like_id'];

    public function article()
    {
    	return $this->belongsTo('App\Article');

    }


    public function user(){

		return $this->belongsTo('App\User'); 

    }
}
