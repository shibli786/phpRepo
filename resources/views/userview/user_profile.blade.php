


@extends('master')
@section('content')
<div class="row">

<div class="user-profile col-md-3">


<img src="{{URL::to('src/images/images.jpeg')}}"" style="width:200px;height:250px;"></img>

<p> <strong>{{$user->name}}</strong></p>
<p>23/11/1993</p>
<p>Reputation: 1200</p>
<p>London,Uk</p>
<p>Member sinced 3 years, 1 month</p>


</div>
<div class="col-md-6">
	<p>{{$user->name}}</p> 
	<p>Bio</p>
	<p>Discription</p>

</div>
<div class="col-md-3">
	<p>
		Posts <strong>{{$user->articles()->count()}}</strong>
	</p>
	<p>	
		<span> Like received <strong>{{$user->totalLikes()}}</strong></span>
	<p>
	<p><span>Total Comment on his posts <strong>{{$user->totalComments()}}</strong></span></p>
	<p>people reached 13000</p>

		



</div>
</div>

<div class="row col-md-9 col-md-offset-3 ">
	<div class="row tag-wrapper">
		<div class="row">
			<a href="#">Top Tag</a> <span><strong>({{$user->tags()->count()}})</strong></span>
		</div>
		

		@foreach($user->tags()->get() as $tag)
		<div class="row tag-container">
	
				<div class="row abc">
					<span>{{$tag->tag_name}}</span>
				</div>
						</div>

	@endforeach				

		
		<div class="row more-link">
			<a href="">View all tags →</a>
		</div>

	</div>

	<div class="row posts-wrapper">

	<div class="row">
		<a href="#">Top Post</a> <span>(<strong>{{$user->articles()->count()}}</strong>)</span>
		</div>
			<hr>
		
                @foreach($user->articles()->get() as $article)  
				<div class="row post-container">
                
				<span class="col-md-1">Likes</span>
                    <span class="likes col-md-1"><strong>{{$article->likes()->count()}}</strong></span>
                   
                    <span class="article-titile col-md-4"><a href="">{{$article->title}}</a></span>
                  	<div class=" col-md-2">
                  	 <span> Comment</span> 
                    <span class="total-comment"><strong>{{$article->comments()->count()}}</strong></span>
                    
                    </div>
                    <span class="post-date col-md-4" >
                    <span title="2016-08-23 21:08:11Z" class="relativetime">{{$article->created_at}}</span></span>
        		 </div>
        		 @endforeach
         	

         <div class="row more-link">
			<a href="">View all Post →</a>
		</div>
	</div>
</div>






@stop