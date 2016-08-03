<?php

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
Route::get('/', "CardsController@laravel");
Route::get('/cards', "CardsController@index");


Route::get('cards/{card}', "CardsController@show");
Route::post('cards/{card}/notes', "AddNotesController@addNotes");

//Route::post('/articles/update/{id}', "ArticleController@updateArticle");

//Route::get('/articles/create', "ArticleController@addArticleForm");
//Route::get('/articles', "ArticleController@index");
//Route::get('/articles/edit/{id}',"ArticleController@editArticle");
//Route::post('/articles/save', "ArticleController@store");
Route::get('/articles/{article}/delete',"ArticlesControlle@destroy");
Route::resource('articles','ArticlesControlle');


