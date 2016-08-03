
@extends('master')

@section('content')

<h1>
Create Article

</h1>

	<div class="row">
		<form method="POST" action="/articles/{{$articles->id}}" class="form-group">
			<input name="_method" type="hidden" value="PUT">
		<strong>Title:</strong>
			<input class="form-control" value="{{$articles->title}}" type="text" name="article_title">

		</input>
	<strong>Body:</strong>
	<textarea class="form-control" value="" name="body">{{$articles->body}}

	</textarea>
<input type="hidden" name="_token" value="{{{ csrf_token() }}}">

	<button type="submit" class="btn btn-primary">Add Article
	</button>

		</form>


	</row>

@stop
