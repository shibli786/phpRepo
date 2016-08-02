<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Http\Requests\CreateArticleRequest;

class ArticleController extends Controller
{
    


	public function index()
	{

		$articles=Article::all();

		return view('article',compact('articles'));
		
	}



	public function addArticleForm()
	{
	$id=['title'=>" ",'body'=>" "];
	return view('create_page',compact('id'));;
	}



	public function editArticle(Article $id)
	{
			//return $id;
		return view('edit_article',compact('id'));


	}


	public function saveArticle(CreateArticleRequest $request)
	{
			return $request->all();
	
		 $article=new Article;


		 $article->title=$request->article_title;
		 $article->body=$request->body;
		 $article->save();
		 //return redirect('/articles');
	}


}
