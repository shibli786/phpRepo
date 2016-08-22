
@extends('master')


@section('content')

<h1>
Create Article

</h1>

	<div class="row">
		<form  action="/articles" method="POST">

			

		<strong>Title:</strong>
			<input class="form-control"  type="text" name="title">

		</input>
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


	</row>
	@include('errors.basic_validation')

@stop
