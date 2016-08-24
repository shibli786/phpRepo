


@extends('master')
@section('content')
<div class="row">

<div class="user-profile col-md-3">


<img src="" style="width:200px;height:250px;"></img>

<p> {{$user->name}}</p>
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
		<a href="">Posts {{$user->articles()->count()}}</a>
	</p>
	<p>	
		<span> Like received 340</span>
	<p>
	<p><span>Total Comment on his posts 678</span></p>
	<p>people reached 13000</p>

		



</div>
</div>

<div class="row col-md-9 col-md-offset-3 ">
	<div class="row tag-wrapper">
		<div class="row">
			<a href="#">Top Tag</a> <span>({{$user->tags()->count()}})</span>
		</div>
		<div class="row tag-container">
	
				<div class="row abc">
					<span>Php</span>
				</div>

					
		</div>
		<div class="row tag-container">
	
				<div class="row abc">
					<span>java</span>
				</div>

					
		</div>
		<div class="row tag-container">
	
				<div class="row abc">
					<span>.Net</span>
				</div>

					
		</div>
		<div class="row more-link">
			<a href="">View all tags →</a>
		</div>

	</div>

	<div class="row posts-wrapper">

	<div class="row">
		<a href="#">Top Post</a> <span>(1200)</span>
		</div>
			<hr>
		
                @foreach($user->articles()->get() as $article)  
				<div class="row post-container">
                
				<span class="col-md-1">Likes</span>
                    <span class="likes col-md-1">{{$article->likes()->count()}}</span>
                   
                    <span class="article-titile col-md-4"><a href="">{{$article->title}}</a></span>
                  	<div class=" col-md-2">
                  	 <span> Comment</span> 
                    <span class="total-comment">{{$article->comments()->count()}}</span>
                    
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