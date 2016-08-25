<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	 /**
     * this method difines "belongstoMany" relationship between tag and Article
	
     *Article  belongs to many tag and Tag may have many article
     * @return Article Object
     */

	public  function articles()
	{
		return	$this->belongsToMany('App\Article','tag_article');
	}

	 /**
     * this method difines "belongstoMany" relationship between Tag and User

     *tag belongs to many user and user may have many tag 
     * @return User Object
     */

    public  function users()
    {
   		 return	$this->belongsToMany('App\User');
    }


}
