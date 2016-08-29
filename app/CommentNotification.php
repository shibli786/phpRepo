<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentNotification extends Model
{
    public function article()
    {
    	return $this->belongsTo('App\Article');

    }


    public function user(){

		return $this->belongsTo('App\User'); 

    }
}
