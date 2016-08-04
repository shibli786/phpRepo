<?php

namespace App\Http\Controllers;
use Illuminate\Http\Requests;



use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    


	public function index()
	{

		$articles=Article::all();

		return view('article',compact('articles'));
		
	}



	public function create()
	{
	$id=['title'=>" ",'body'=>" "];
	return view('create_page',compact('id'));;
	}



	public function edit(Article $id)
	{
			//return $id;
		return view('edit_article',compact('id'));


	}


	public function store(CreateArticleRequest $request)
	{
			//return $request->all();
	
		 $article=new Article;


		 $article->title=$request->article_title;
		 $article->body=$request->body;
		 $article->save();
		 return redirect('/articles');
	}


	public function update(CreateArticleRequest $req,Article $id)
	{
				
		$id->body=$req->body;
		$id->title=$req->article_title;
		$id->save();
		return redirect('/articles');

 

	}

public function des()
{
	dd("he");
}

}
