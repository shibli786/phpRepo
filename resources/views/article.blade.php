@extends('master')


@section('content')

	<div class="row posts col-md-8 col-md-offset-2" >

		<h1> Articles</h1><hr>
			@foreach($articles as $article)
		
			<!--<p class="btn-group">

			<a class="btn btn-success" href="articles/{{$article->id}}/edit">Edit</a>

			<a href="articles/{{$article->id}}/delete" class="btn btn-danger">Delete</a></p>-->
		
			<article class="post"'>

				<a href="{{URL::to('articles/'.$article->id)}}"><h4>{{$article->title}}</h4></a>
					
					@if ( strlen($article->body ) > 210 )
						<p>{{ substr( $article->body,0,201)."...  "}}
						<a href="/articles/{{$article->id}}">more</a>
					@else
						<p>{{$article->body}}</p>

					@endif
					
						@include('partials.like_comment_share')
		    </article>

		     	 		     


			@endforeach
	

		    	<script type="text/javascript">

		    
		     		var token=	'{{Session::token()}}';
		    		var likeUrl='{{URL::to("/like")}}';
		    		var isloggedin='{{Auth::user()}}';
		       		var deleteUrl="{{URL::to('articles/1600')}}";
		 	
		   		 </script>

	</div>

@stop