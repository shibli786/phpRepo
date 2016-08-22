<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;
use App\Tag;
use App\User;
use App\Comment;

class Article extends Model
{
    //


    protected $fillable=['title'
    ,'body','user_id'
    ];


    public function user()
    {
    	return $this->belongsTo('App\User');

     }
     public function tags()
     {
     	return $this->belongsToMany('App\Tag','tag_article');
     }
     public function likes()
     {
         return $this->hasMany('App\Like');
    }


     public function comments()
     {
         return $this->hasMany('App\Comment');
    }
}
