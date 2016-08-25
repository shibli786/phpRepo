@extends('master')

@section('content')
<div class="posts single col-md-7 col-md-offset-2">

<header class="title"><h3>{{$article->title}}<h3></header>
	<article class="post" val='{{ $article->id}}'">
		<p>{{$article->body}}</p>
		@include('partials.like_comment_share')

		
	</article>


	<div class="row comments " id="comments">
		@foreach($comments as $comment)

			<div class="row comment-by-user">
			@if(Auth::user())
			@if(Auth::user()->id==$comment->user()->get()[0]->id)
			
				<a class=" close pull-right" href="">&times;</a>
			
			@endif	
			@endif
				<a href={{URL::to("users/".$comment->user()->first()->id)}}><strong class="name">{{$comment->user()->first()->name}}</strong></a>

				<p class="body"> {{$comment->body}}</p>
				<p class="info">{{$comment->created_at}}</p>

			</div>
			

		@endforeach
	</div>
	
		@if(Auth::user())
		<div class="row comment-form">

		<textarea  class="form-control post-comment form-control"  onkeypress="return runScript(event)" name="body" placeholder="Write a comment"></textarea>
		<button class="btn btn-info pull-right  post-button">Comment</button>
		</div>
		@else
		<div class="row login-to-comment">
		<a class="btn btn-success " href="{{URL::to('/auth/login')}}">Login to Comment</a>
		</div>
		@endif
	
</div>
	



	

<script type="text/javascript" src="{{URL::to('src/js/app.js')}}"></script>
<script type="text/javascript">
	    	
	    var token=	'{{Session::token()}}';
	    var likeUrl='{{URL::to("/like")}}';
	    var postId='{$article->id}}';
	    var isloggedin='{{Auth::user()}}';
	    var authName='{{Auth::user()?Auth::user()->name:"anonymous user"}}'
	    var deleteUrl="{{URL::to('articles/'.$article->id)}}";
	    var commentUrl="{{URL::to('articles/'.$article->id.'/comment')}}";

 </script>
	  

 @stop 