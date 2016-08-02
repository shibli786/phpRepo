@extends('master')

@section('content')
<div class="row">


<h2>Card Title


</h2>


<ul class="list-group">
@foreach($cards as $card)
<a href="/cards/{{$card->id}}"><li class="list-group-item"> {{$card->title}}</li></a>
@endforeach
</ul>

<div class="row">
	<form method="POST" action="/cards/addcard">
<textarea class="form-control" name="body"></textarea>
<button type="submit" class="btn-primary">Add Cards</button>
</form>

</div>




</div>
@stop