<?php



Route::get('/',function(){


return view('layouts.app');

});
//



Route::controllers(['auth'=>'Auth\AuthController','password'=>'Auth\PasswordController']);





class MethodTest
{
    public function __call($name, $arguments)
    {

    	echo "Method name is ".$name."<br>";
        // Note: value of $name is case sensitive.
        echo ""
             . implode(', ', $arguments). "\n";
    }

    /**  As of PHP 5.3.0  */
    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
     //   echo implode(',',$arguments);
    }
}


 // As of PHP 5.3.0


$this->app->resolving(function( $foo, $app){
	//static $a=0;$a++;
  //echo "<br>    $a" ;
   //var_dump($foo);
 //echo $method->hell("hehahaha");
});

//Route::get('/',function(){
//	App::make('bar');
//});




class bar
{



}









/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::get('/', "CardsController@laravel");
//0Route::get('/cards', "CardsController@index");


//Route::get('cards/{card}', "CardsController@show");
//Route::post('cards/{card}/notes', "AddNotesController@addNotes");

//Route::post('/articles/update/{id}', "ArticleController@updateArticle");

//Route::get('/articles/create', "ArticleController@addArticleForm");
//Route::get('/articles', "ArticleController@index");
//Route::get('/articles/edit/{id}',"ArticleController@editArticle");
//Route::post('/articles/save', "ArticleController@store");
//Route::get('/articles/{article}/delete',"ArticlesControlle@destroy");
//Route::get('/logout',"Auth\AuthController@getLog");
//Route::get('/logout',"Auth\AuthController@getLogout");

Route::resource('articles','ArticlesControlle');