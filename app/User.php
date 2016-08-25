<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Like;
use App\Comment;
class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




    

    public function articles()
    {

        return $this->hasMany('App\Article');

    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');     
    }


    public function tags()
    {
        return   $this->belongsToMany('App\Tag','user_tag');
    }



    public function totalLikes()
    {
        $sum=0;
        foreach ($this->articles()->get() as $article)
        {
            $sum+=$article->likes()->count();
        }
        return $sum;
      
    }


     public function totalComments()
    {
        
        $totalComments=0;
        foreach ($this->articles()->get() as $article) {
            $totalComments+=$article->comments()->count();       
        }
        return $totalComments;

    }
}

