@extends('master')


@section('content')

<div class="row posts col-md-8 col-md-offset-2" >

	<h1> Articles</h1><hr>


		@foreach($articles as $article)
		<a href="{{URL::to('articles/'.$article->id)}}"><h4>{{$article->title}}</h4></a>
<!--<p class="btn-group">

<a class="btn btn-success" href="articles/{{$article->id}}/edit">Edit</a>

<a href="articles/{{$article->id}}/delete" class="btn btn-danger">Delete</a></p>-->
	
		<article class="post">

			
				
				@if(strlen($article->body)>210)
				<p>{{substr($article->body,0,201)."...  "}}<a href="/articles/{{$article->id}}">more</a>

				@else
				<p>{{$article->body}}</p>

				@endif
				
		
			<div class="info"> Posted by {{$article->user()->first()->name.'   '.$article->user()->first()->created_at  }}</div>
			<div class="interaction">
			{{$article->likes()->count()." "}}	
				
				<a href="#" val='{{ $article->id}}' class="like">@if(Auth::user()){{Auth::user()->likes()->where('article_id',$article->id)->count()==0?'Like':'Liked'}}</a> |
				@else |<a href="" val='{{ $article->id}}' class="like">Like</a>
				@endif
				<a href="#" class="comment">Comment</a>|
				<a href="#" class="share">Share</a>
			</div>

	    </article>

	     	 		     


		@endforeach
			<script type="text/javascript" src="{{URL::to('src/js/app.js')}}"></script>

	    <script type="text/javascript">

	    
	     var token=	'{{Session::token()}}';
	    var likeUrl='{{URL::to("/like")}}';
	 
	  
	   
	    </script>

</div>

@stop