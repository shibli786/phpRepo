@extends('master')
@section('content')

<div class="row col-md-12">

<form>
<div class="form-group" style="width:200px;">
<input type="text" name="search" placeholder="Search User" class="form-control"><button type="submit" class="btn btn-info" style="margin-top:10px;">Search</button>
</div>


</form>
</div>




<div class="row">


@foreach($arr['items'] as  $item)


<div style="margin-bottom:30px;"class="col-md-3">

@if(isset($item->tag_name))
<a href="tags/{{$item->id}}">{{
$item->tag_name." x "}}</a>{{$item->articles()->count()}}
@else
<a href="users/{{$item->id}}">{{$item->name."          "}}</a><p>{{ $item->email." x "}}{{$item->tags()->count()}}</p>
@endif
</div>
@endforeach

</div>
<div style="float:right;">
	
{{ $arr['items']->links() }}
</div>


@stop




