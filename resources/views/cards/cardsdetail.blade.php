@extends('master')

@section('content')
<div class="row">

	{{$card=$arr['cards']}}
	<h2>{{$card->title}}
	</h2>
	<ul class="list-group">
		@foreach($arr['notes'] as $note)
			<li class="list-group-item"> {{$note->body}}</li>
		@endforeach
	</ul>





	<div class="row">
		<form method="post" action="/cards/{{  $card->id}}/notes">
			<textarea class="form-control" name="body"></textarea>
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<input type="hidden" name="card_id" value="{{$card->id}}">
			<button type="submit" class="btn-primary">Add Notes</button>
		</form>

	</div>




</div>
@stop