@extends('master')

@section('content')

<div class="row">
<h1> Articles</h1>
<a href="articles/create" class="btn btn-success" style="float:right; "> Create Article</a>

</div>

@foreach($articles as $article)
<a href ="articles/edit/{{$article->id}}"><h4>{{$article->title}}</h4></a>
<div class="row">
<div class="jumbotron">

	{{$article->body}}
</div>
</div>


@endforeach

@stop