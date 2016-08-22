	var  isloggedin=false;


$('.like').on('click',function (event) {
	console.log();
console.log('called');
  ajax($(this).attr('val'));
  var a=$(this).html();
  console.log(isloggedin);
if(isloggedin){
a=="Like"?$(this).html('Liked'):$(this).html('Like');}
else{
	alert('Please Login to continue');

}


});

function ajax(val) {
	$.ajax({
		method:"POST",
		url:likeUrl,
		async:false,
		data:{'article_id':val,'_token':token}
		}).done(function () {
		console.log('ajax completed');
			isloggedin=true; 		console.log('ajax isloggedin'+isloggedin);

		});
}

