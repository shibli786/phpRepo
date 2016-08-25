
@extends('master')


@section('content')



	<div class="row col-md-8 col-md-offset-2">
		<h3>Create Article</h3>
		<form  action="/articles" method="POST">		
			<strong>Title:</strong>
			<input class="form-control"  type="text" name="title"></input>
			<strong>Body:</strong>
			<textarea class="form-control article-area" name="body" placeholder="Write your Content"></textarea>
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" >
			<button type="submit" class="btn btn-primary">Add Article
			</button>
			<select multiple class="form-control" name="tags[]">
			@foreach($tags as $key=>$tag)
	     	<option value={{$key}}>{{$tag}}</option>
			@endforeach
			</select>

		</form>
		@include('errors.basic_validation')

	</div>
	


@stop
