

<div class="notificationContainer">
<span id="notification_count"></span>


<div>
<ul class="tab">
  <a href="#" class="tablinks"><li class="like-not" onclick="notify(event, 'likes')">Likes</li></a>
  <a href="#" class="tablinks"><li class="comment-not" onclick="notify(event, 'comments')">Comments</li></a>
 </ul>

</div>



<div id="likes" class="tabcontent">


	
@if(isset($notification)) 
@foreach($notification[0]['like'] as $notify)
@if(Auth::user()->id!=App\User::findOrFail($notify['user_id'])->id)
<div class="row notificationsBody">

{{App\User::findOrFail($notify['user_id'])->name}} Liked your Article

<span class="info">{{App\User::findOrFail($notify['user_id'])->created_at}}</span>


</div>
@endif
@endforeach

@endif

</div>


<div id="comments" class="tabcontent">

@if(isset($notification)) 
@foreach($notification[0]['comments'] as $notify)
@if(Auth::user()->id!=App\User::findOrFail($notify['user_id'])->id)
<div class="row notificationsBody">

{{$user=App\User::findOrFail($notify['user_id'])->name}} Commented on your Article
<span class="info">{{App\User::findOrFail($notify['user_id'])->created_at}}</span>

</div>
@endif
@endforeach

@endif







</div>





<div id="notificationFooter"><a href="#">See All</a>
</div>




</div>
