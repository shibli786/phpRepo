@extends('master')

@section('content')
<div class="posts single col-md-8">

<header class="title"><h3>{{$article->title}}<h3></header>
	<article class="post">
		<p>{{$article->body}}</p>
		@include('partials.like_comment_share')

		
		</article>
		<form>
		<div class="row">

	<textarea  class="form-control post-comment form-control" placeholder="Write a comment"></textarea>
	<button class="btn btn-info pull-right  post-button">Comment</button></div>

	<div class="row comments ">
	@foreach($comments as $comment)

		<div class="row comment-by-user">
			<a href="#"><strong class="name">{{$comment->user()->first()->name}}</strong></a>
			<p class="body"> {{$comment->body}}</p>
			<p class="info">{{$comment->created_at}}</p>

		</div>
		

	@endforeach
	</div>
</div>
	



	

<script type="text/javascript" src="{{URL::to('src/js/app.js')}}"></script>
<script type="text/javascript">
	    	
	    var token=	'{{Session::token()}}';
	    var likeUrl='{{URL::to("/like")}}';
	    var postId='{$article->id}}';
	    var isloggedin='{{Auth::user()}}';
	    var deleteUrl="{{URL::to('articles/'.$article->id)}}";

 </script>
	  

 @stop 