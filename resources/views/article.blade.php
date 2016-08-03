@extends('master')

@section('content')

<div class="row">
<h1> Articles</h1>
<a href="/articles/create" class="btn btn-success" style="float:right; "> Create Article</a>

</div>

@foreach($articles as $article)
<h4>{{$article->title}}</h4>
<p class="btn-group">

<a class="btn btn-success"href="articles/{{$article->id}}/edit">Edit</a>

<a href="articles/{{$article->id}}/delete" class="btn btn-danger">Delete</a>
</p>
<div class="row">
<div class="jumbotron">

	{{$article->body}}
</div>
</div>


@endforeach

@stop