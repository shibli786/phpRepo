
//like ajax request
$(document).ready(function(){
	$('.notificationContainer').slideUp();
$('.like').on('click',function (event) {
	 event.preventDefault();
	 console.log('called val '+$(this).parent().attr('val'));
     ajax($(this).parent().attr('val'));
	 console.log($(this).attr('val'));
   	 var a=$(this).text();
  	 console.log("gag "+isloggedin);
	 if(isloggedin){
		console.log(a)
		a=="Like"?$(this).siblings('.count-like').text(parseInt($(this).siblings('.count-like').text())+1):$(this).siblings('.count-like').text(parseInt($(this).siblings('.count-like').text())-1);
		a=="Like"?$(this).html('Liked'):$(this).html('Like');
		console.log("total like "+$(this).prev(".count-like").text());
		//$(this).siblings('.count-like').text(parseInt($(this).siblings('.count-like').text())+1);
	}
	 else{
		alert('Please Login to continue');

	}

});

//function which handle ajax request

function ajax(val) {


	$.ajax({
		method:"POST",
		url:likeUrl,
	
		data:{'article_id':val,'_token':token}
		}).done(function () {
					console.log('ajax completed');
					isloggedin=true;
					console.log('ajax isloggedin'+isloggedin);

				}
	);
}


//delete ajax request
$('.delete').on('click',function(event){
	var a=confirm("This post will be deleted");
	if(a){
		var deleted=false;
		event.preventDefault();
		console.log("del  "+deleteUrl);

		var val=$(this).parent().attr('val');
	
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






//comment post ajax request
$('.post-button').on('click',function(event){
postComment(event);	

});



 function runScript(e) {
				    if (e.keyCode == 13) {

				    $('.comments').scrollTop = 9999999;
				     postComment(e);

				    }
				}

				


	function postComment(event) {
					
		
		event.preventDefault();
		var val=$(".post").attr('val');

		if(isloggedin)
			$(".comments").append("<div class='row comment-by-user'> <a class= 'close pull-right' href=''>&times;</a><a href='#'><strong class='name'>"+authName+"</strong></a><p class='body'>"+$('.post-comment').val()+"</p><p class='info'>"+Date.now()+"</p></div>  "); 
		else{
			$(".comments").append("<div class='row comment-by-user'><a class= 'close pull-right' href=''>&times;</a> <strong class='name'>"+authName+"</strong><p class='body'>"+$('.post-comment').val()+"</p><p class='info'>"+Date.now()+"</p></div>  "); 

		}
		document.getElementById('comments').scrollTop = 9999999;
			$.ajax({
				method:"post", url:commentUrl,data:{"body":$('.post-comment').val(),'_token':token,'article_id':val}}).done();

			$('.post-comment').val("");
			console.log($(".count-comment").text());

			$(".count-comment").text(parseInt($(".count-comment").text())+1);


	}







$(".notificationLink").on('click',function (event) {

	event.preventDefault();
	event.stopPropagation();



        

	console.log("first");


	if ($('.notificationContainer').is(':visible')){

	$('.notificationContainer').slideUp();}
	else{
		$('.notificationContainer').slideDown();

	}

	return false;
});





















});


function notify(evt, tabName) {
    // Declare all variables

    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}









