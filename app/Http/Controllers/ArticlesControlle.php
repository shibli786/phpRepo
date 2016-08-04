<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Http\Requests\CreateArticleRequest;

class ArticlesControlle extends Controller
{

public function des()
{
    dd("he");
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $articles=Article::all();

        return view('article',compact('articles'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
       $id=['title'=>" ",'body'=>" "];
    return view('create_page',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArticleRequest $request)
    {
        //Method 1
         //$article=new Article;
         //$article->title=$request->article_title;
         //$article->body=$request->body;
         //$article->save();
        //Method 2
        $ar=new Article($request->all());
        Auth::user->articles()->save($ar);
        //Article::create($request->all());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $articles)
    {
        //eturn $articles;
      return view('edit_article',compact('articles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateArticleRequest  $req, Article $articles)
    {
  //  return$articles;

        //Method 1
        //$articles->body=$req->body;
        //$articles->title=$req->article_title;

        //Method 2

       // Article::update()
        $articles->update();
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

 
        return redirect('/articles');

    }


}
