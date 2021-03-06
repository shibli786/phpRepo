<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;
class TagController extends Controller
{
    
    /**
     * Display a listing of the tags .
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $tags=Tag::paginate(50);
        $arr=['items'=>$tags];
        return view('userview.list',compact('arr'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified tags and related information.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $id)
    {
        $articles=$id->articles()->get();
        \Log::info("tag controller show method $id");

         return view('article',['articles'=>$articles]);

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
}
