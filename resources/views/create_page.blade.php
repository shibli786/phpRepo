
@extends('master')

@section('content')

<h1>
Create Article

</h1>

	<div class="row">
		<form  action="/articles/save" method="POST">
		<strong>Title:</strong>
			<input class="form-control"  type="text" name="article_title">

		</input>
	<strong>Body:</strong>
	<textarea class="form-control" value="" name="body">

	</textarea>
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" >

	<button type="submit" class="btn btn-primary">Add Article
	</button>

		</form>


	</row>

@stop