<html>


<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{URL::to('src/css/main.css')}}">
 	<script src="//code.jquery.com/jquery.js"></script>
 	
 <script type="text/javascript" src="{{URL::to('src/js/app.js')}}"></script>
 <script type="text/javascript" src="{{URL::to('src/js/jquery.js')}}"></script>
<meta http-equiv="cache-control" content="private, max-age=0, no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">

</head>

<body>

	@if(Auth::user())
	<?php $notification=event(new App\Events\RefreshPageEvent(Auth::user()))?>
	@endif
	@include('layouts.nav')




		<div class="container whole" >
<div class="row">
<div class=" row btn-group nav-links col-md-4 col-md-offset-8">
<a href="{{URL::to('users')}}" class="btn btn-success" > Users</a>
<a href="{{URL::to('tags')}}" class="btn btn-success" > Tags</a>
<a href="/questions" class="btn btn-success" >Questions</a>
<a href="/askquestion" class="btn btn-success" >Ask Questions</a>
</div>
</div>
<div class="row col-md-12"><hr></div>



	
			@if(Session::has('flash_message'))

				<div class="alert alert-success {{Session::has('is_important')?'alert-importan':''}}" style=" margin-top:50px;">

				<button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button>
 			{{Session::get('flash_message')}}
 			{{Session::forget('flash_message')}}
		</div>

			@endif


          
				@yield('content')

	
		</div>


 	 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

 	 	<script >
 	 		
 	 		$('div.alert').not('div.alert-importan').delay(3000).slideUp(300);
 	 	</script>



<div class="footer "><p class="footer-text">cc 20150-16<p></div>
</body>


</html>