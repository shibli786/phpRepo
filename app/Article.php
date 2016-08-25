<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;
use App\Tag;
use App\User;
use App\Comment;

class Article extends Model
{
    
	/**
     *fields of Article table which are mass assignable 
     *
     * @return void
     */

    protected $fillable=['title'
    ,'body','user_id'
    ];

    /**
     * this method difines "belongsto" relationship between article and user

     *Article  belongs to User
     * @return User Object
     */

    public function user()
    {
    	return $this->belongsTo('App\User');

    }


     /**
     * this method difines "belongstoMany" relationship between article and tags

     *Article  belongs to many tag and tags belongs to many article
     * @return User Object
     */

    public function tags()
    {
     	return $this->belongsToMany('App\Tag','tag_article');
    }


     /**
     * this method difines "hasMany" relationship between article and likes

     *Article  has many likes
     * @return tag Object
     */
    public function likes()
    {
         return $this->hasMany('App\Like');
    }


     /**
     * this method difines "hasMany" relationship between article and Comments

     *Article  has  many comment
     * @return Comment Object
     */

    public function comments()
    {
         return $this->hasMany('App\Comment');
    }

 
}
