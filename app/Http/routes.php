<?php

\Log::info("route");


Route::post('/readlike/{id}','UserController@markAsRead');
Route::post('readcomment/{id}','CommentsController@markAsRead');


Route::get('/myarticles','ArticlesController@userArticle');
Route::controllers(['auth'=>'Auth\AuthController','password'=>'Auth\PasswordController']);
Route::get('/users','UserController@index');
Route::get('/tags','TagController@index');
Route::get('/tags/{id}','TagController@show');
Route::post('/like','ArticlesController@postLike');

Route::post('/articles/{id}/comment','CommentsController@store');

Route::get('users/{user}','UserController@show');
Route::get('send','UserController@sendEmail');
Route::resource('articles','ArticlesController');


Route::get('/home','Auth\AuthController@notification');



Route::get('/',function ()
{
  return view('master');
});











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

