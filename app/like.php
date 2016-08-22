<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\User;
class like extends Model
{

protected $fillable=['user_id','article_id'];
    //



    public function user()
    {
    	return   $this->belongsTo('App\User');
    	
    }

     public function article()
    {
    	
    	    	return   $this->belongsTo('App\Article');

    }
}
