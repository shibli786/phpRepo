@extends('master')
@section('content')
<div class="posts single">

<header class="title"><h3>{{$article->title}}<h3></header>
<article class="post col-md-12">

			
				
			
				

				
				<p>{{$article->body}}</p>

			
				
		
			<div class="info"> Posted by {{$user->name.'   '.$user->created_at  }}</div>
			<div class="interaction">	
				<a href="" class="like">Like</a>
				|<a href="" class="comment">Comment</a>
				
				
				@if(isset($auth))

				|<a href="" class="comment">Edit</a>
				|<a href="" class="comment">Delete</a>
				@endif
				|<a href="" class="share">Share</a>
			</div>

	    </article>

	       <textarea  class="form-control post-comment" placeholder="Wrtite a comment"></textarea>
	    </div>
	     	 		     	<script type="text/javascript" src="{{URL::to('src/js/app.js')}}"></script>

	     <script type="text/javascript">
	    	
	    var token=	'{{Session::token()}}';
	    var likeUrl='{{URL::to("/like")}}';
	    var postId={{$article->id}};
	    </script>
	    @stop 