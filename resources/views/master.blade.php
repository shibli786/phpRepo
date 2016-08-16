<html>


<head>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>



		<div class="container" >
	
			@if(Session::has('flash_message'))

				<div class="alert alert-success {{Session::has('is_important')?'alert-importan':''}}" style=" margin-top:50px;">

				<button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button>
 			{{Session::get('flash_message')}}
		</div>

			@endif


          
				@yield('content')

	
		</div>

 	<script src="//code.jquery.com/jquery.js"></script>
 	 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

 	 	<script >
 	 		
 	 		$('div.alert').not('div.alert-importan').delay(3000).slideUp(300);
 	 	</script>



@yield('footer')
</body>


</html>