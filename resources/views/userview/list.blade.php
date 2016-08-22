@extends('master')
@section('content')
<div class="row">
Users
<form>
<div class="form-group">
<input type="text" name="search" placeholder="Search User" class="form-control col-md-2">
</div>
<button type="submit" class="btn btn-info col-md-1">Search</button>

</form>
</div>
<hr>



<div class="row">


@foreach($arr['items'] as  $item)


<div style="margin-bottom:30px;"class="col-md-3">

@if(isset($item->tag_name))
<a href="#">{{
$item->tag_name}}</a>
@else
<a href="#">{{$item->name."\n"}}{{ $item->email}}</a>
@endif
</div>
@endforeach

</div>
<div style="float:right;">
	
{{ $arr['items']->links() }}
</div>


@stop




