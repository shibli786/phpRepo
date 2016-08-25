<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Http\Requests\CreateArticleRequest;use Illuminate\Support\Facades\Auth;
use Log;
use App\Like;
class ArticlesController extends Controller{

    public function __construct(){
        Log::info('ArticlesControlle executed');
        $this->middleware('auth',['only'=>['create','store','edit','postLike','destroy']]);
    }



    /**
     * Display a listing of the artilces
     *
     * @return \Illuminate\Http\Response

     */
    public function index()
    {
         $articles=Article::all();
         return view('article',['articles'=>$articles]);
        
    }

    /**
     * Display a listing of the loggedin user articles.
     *
     * @return \Illuminate\Http\Response

     */

    public function userArticle()
    {
        $articles=Auth::user()->articles()->get();
        return view('article',compact('articles'));

    }


     /**
     * Show the form for creating a new atilces.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
         $tags =\App\Tag::lists('tag_name','id');
         return view('create_page',compact('tags'));
    }

    /**
     * Store a newly created  articles in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArticleRequest $request)
    {
        Auth::user()->articles()->save(new Article($request->all()))->tags()->attach($request->input('tags'));
        Auth::user()->tags()->attach($request->input('tags'));
        Log::info(Auth::user());
        \Session::flash('flash_message','Your Article has been created');

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $articles)
    {
        $comments=$articles->comments()->get();
        if(Auth::user()){
        $authuser=Auth::user()->articles()->where('id',$articles->id)->first();
        return view('show_article',['article'=>$articles,'comments'=>$comments]);
        }    
        return view('show_article',['article'=>$articles,'comments'=>$comments]);   
        
    }

    /**
     * Show the form for editing the specified artilce.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $articles)
    {
      return view('edit_article',compact('articles'));

    }


    /**
     * Update the specified article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(CreateArticleRequest  $req, Article $articles)
    {

        
        $articles->update($req->all());
    
        return redirect('/articles');
    }

    /**
     * Remove the specified article from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        Log::info('destroy method ic called');
        Log::info($request->article_id);
        $article=Article::find($request->article_id);
        $article->delete();
        return redirect('/articles');

    }

    /**
     * this method will be called when user like or unlike the article and corresponding
     action will be performed

     *
     * @return \Illuminate\Http\Response

     */
    public function postLike(Request  $request)
    {
        \Log::info('post like is called');
        \Log::info($request->article_id);
        $article= Article::where('id',$request->article_id)->first();
        \Log::info($article);
        if ( $article == null ) {
        \Log::error('No article');
         return null; 
       }
        $like= $article->likes()->where('user_id',Auth::user()->id)->first();

        if ( $like == null ) 
        { 
            $like= new Like;
            $like->article_id=$request->article_id;
            Log::info($like);
            Auth::user()->likes()->save($like);
            \Log::info("success");

       }

       else{

          Auth::user()->likes()->where('article_id',$request->article_id)->delete();
          \Log::info('deleted');
       }


}
    

}
