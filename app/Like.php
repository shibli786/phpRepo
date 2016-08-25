<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\User;
class Like extends Model
{

protected $fillable=['user_id','article_id'];
    //

 /**
     * this method difines "belongsto" relationship between Like and User

     *Like  belongs to USer
     * @return User Object
     */

    public function user()
    {
    	return   $this->belongsTo('App\User');
    	
    }


     /**
     * this method difines "belongsto" relationship between Likes and Article

     *Likes  belongs to  Article
     * @return Article Object
     */

    public function article()
    {
    	return   $this->belongsTo('App\Article');
    }
}
