
			<div class="info"> Posted by {{$article->user()->first()->name.'   '.$article->user()->first()->created_at  }}
			</div>
			<div class="interaction">
			{{$article->likes()->count()." "}}<a href="#"  val='{{ $article->id}}' class="like">@if(Auth::user()){{Auth::user()->likes()->where('article_id',$article->id)->count()==0?'Like':'Liked'}}</a> |
				@else |<a href="#" val='{{ $article->id}}' class="like">Like</a>
				@endif
				{{$article->comments()->count()." "}}
				<a href="#" class="comment">Comment</a>
				
					
				@if($article->user()->get()[0]->id==Auth::user()->id)

				|<a href="" val='{{ $article->id}}'  class="comment">Edit</a>
				|<a href="#"  val='{{ $article->id}}'  class="delete">Delete</a>
				@endif
				|<a href="" val='{{ $article->id}}'  class="share">Share</a>
			</div>