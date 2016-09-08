@extends('master')


@section('content')

	<div class="row posts col-md-8 col-md-offset-2" >

			@foreach($articles as $article)
		
			<!--<p class="btn-group">

			<a class="btn btn-success" href="articles/{{$article->id}}/edit">Edit</a>

			<a href="articles/{{$article->id}}/delete" class="btn btn-danger">Delete</a></p>-->
		<span ><a class="article-title"  href="{{URL::to('articles/'.$article->id)}}">{{$article->title}}</a></span>
			<article class="post"'>

				
					
					@if ( strlen($article->body ) > 210 )
						<p>{{ substr( $article->body,0,201)."...  "}}
						<a href="/articles/{{$article->id}}">more</a>
					@else
						<p>{{$article->body}}</p>

					@endif
					
						@include('partials.like_comment_share')
		    </article>
		    <hr>
		     	 		     


			@endforeach
	

		    	<script type="text/javascript">

		    
		     		var token=	'{{Session::token()}}';
		    		var likeUrl='{{URL::to("/like")}}';
		    		var isloggedin='{{Auth::user()}}';
		       		var deleteUrl="{{URL::to('articles/1600')}}";
		 	
		   		 </script>

	</div>

@stop