
			<div class="info">
				Posted by {{$article->user()->first()->name.'   '.$article->user()->first()->created_at  }}
			</div>
			
			<div class="interaction" val='{{ $article->id}}'>
					<span class="count-like">{{$article->likes()->count()}}</span>
			
					@if(Auth::user())
						<a href="#" class="like">{{Auth::user()->likes()->where('article_id',$article->id)->count()==0?'Like':'Liked'}}</a>
						
						
					@else
						|<a href="#"  class="like">Like</a>
					
					@endif
						|<span class="count-comment">{{$article->comments()->count()}}</span>
						<a href="#" class="comment">Comment</a>
			
					@if(Auth::user())	 
						@if($article->user()->get()[0]->id==Auth::user()->id)
							|<a href=""  class="comment">Edit</a>
							|<a href="#"   class="delete">Delete</a>
						@endif
					@endif
		
		 			|<a href=""  class="share">Share</a>
			</div>