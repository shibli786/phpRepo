
@extends('master')

@section('content')

<h1>
Create Article

</h1>

	<div class="row">
		<form  action="/articles" method="POST">

			
			<input type="hidden" name="user_id" value="1">
		<strong>Title:</strong>
			<input class="form-control"  type="text" name="title">

		</input>
	<strong>Body:</strong>
	<textarea class="form-control" name="body">

	</textarea>
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" >

	<button type="submit" class="btn btn-primary">Add Article
	</button>

		</form>


	</row>
	@include('errors.basic_validation')

@stop
