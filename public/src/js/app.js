


$('.like').on('click',function (event) {
	 event.preventDefault();
	
	console.log('called');
  
  ajax($(this).attr('val'));
console.log($(this).attr('val'));

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
	
		data:{'article_id':val,'_token':token}
		}).done(function () {
		console.log('ajax completed');
			isloggedin=true; 		console.log('ajax isloggedin'+isloggedin);

		});
}



$('.delete').on('click',function(event){
var a=confirm("This post will be deleted");
if(a){
	var deleted=false;
		 event.preventDefault();
		 console.log("del  "+deleteUrl);

var val=$(this).attr('val');
	
console.log("value  "+val);
$.ajax({

url:deleteUrl,
type:"POST",
   data: {_method: 'delete','_token':token,'article_id':val},




}).done(function () {
	deleted=true;
});

	console.log("GOING TO DELETE")
	$(this).parent().parent().remove();
}

});



$('.comment').on('click',function(event){

event.preventDefault();
	

$.ajax({
method:"post",
url:deleteUrl,
data:{}




}).done();


});

$('.share').on('click',function(event){
	
	
event.preventDefault();
	

$.ajax({
method:"post",
url:deleteUrl,
data:{}




}).done();


});

	
$('.edit').on('click',function(event){
	
	
	event.preventDefault();


$.ajax({
method:"post",
url:deleteUrl,
data:{}




}).done();


});




$('.post-button').on('click',function(event){
console.log("asgaghsdjka");
	event.preventDefault();
	$(".comments").append("<div class='row comment-by-user'> <a href='#'><strong class='name'>shibli</strong></a><p class='body'> body</p><p class='info'>time</p></div>  "); 




});