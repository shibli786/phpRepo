<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Http\Requests\CreateArticleRequest;use Illuminate\Support\Facades\Auth;
use Log;
use App\Like;
class ArticlesControlle extends Controller{

public function __construct(){
            Log::info('ArticlesControlle executed');


            $this->middleware('auth',['only'=>['create','store','edit','postLike']]);
}



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function index()
    {

         $articles=Article::all();

         return view('article',['articles'=>$articles]);
        
        }


        public function userArticle()
        {
           $articles=Auth::user()->articles()->get();
            return view('article',compact('articles'));

        }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
     $tags =\App\Tag::lists('tag_name','id');

      // $id=['title'=>" ",'body'=>" "];
    return view('create_page',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArticleRequest $request)
    {
//  dd($request->all());
       // dd($request->input('tags'));
        //Method 1
        //$article=new Article;
        //$article->title=$request->article_title;
        //$article->body=$request->body;
        //$article->save();
        //Method 2
      //  $ar=new Article($request->all());

     Auth::user()->articles()->save(new Article($request->all()))->tags()->attach($request->input('tags'));
        Log::info(Auth::user());
        //  Log::info("lets see inside");
         //   Log::info(Auth::user()->articles->all());
        \Session::flash('flash_message','Your Article has been created');

        //Article::create($request->all());
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
        if(Auth::user()){
      $authuser=Auth::user()->articles()->where('id',$articles->id)->first();
        return view('show_article',['article'=>$articles,'auth'=>$authuser,'user'=>$articles->user()->first()]);
        }
        return view('show_article',['article'=>$articles,'user'=>$articles->user()->first()]);   
        
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

        //return $req->toArray();
        //Method 1
        //$articles->body=$req->body;
        //$articles->title=$req->article_title;

        //Method 2

        $articles->update($req->all());
    
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

    public function postLike(Request  $request)
    {
        \Log::info('post like is called');
        \Log::info($request->article_id);


       $article= Article::where('id',$request->article_id)->first();
       
          \Log::info($article);
      
       if($article==null){
        \Log::error('No article');
         return null; 
       }
      
      $like= $article->likes()->where('user_id',Auth::user()->id)->first();

      
       if($like==null){
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
