<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\CommentNotification;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Log;
use App\Like;
use App\Events\CommentOnArticleEvent;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Article $id)
    {

        \Log::info("comment method is called");

        Log::info($request);
        $comment=new Comment;
        $comment->user_id=Auth::user()->id;
        $comment->body=$request->body;
        $id->comments()->save($comment);

        //firing an event of commenting on post for notifying the author of article
       
        \Event::fire(new CommentOnArticleEvent($comment,$id));


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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


 public function markAsRead(CommentNotification $id)
    {
        \Log::info($id);
        $id->update(['mark_as_read' => 1]);
        \Log::info("mark_as_read");

                \Log::info($id);
        
    }
}
