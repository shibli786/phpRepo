<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    


     /**
     * this method difines "belongsto" relationship between comment and user

     *comment  belongs to user
     * @return User Object
     */
	public function  user()
	{
		return $this->belongsTo('App\User');
	}


	 /**
     * this method difines "belongsto" relationship between comment and article
     * comment  belongs to Article
     * @return article Object
     */
				
	public function article()			
	{
		return $this->belongsTo('App\Article');
	}				

}
