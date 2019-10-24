$(document).ready(function(){
	$("#face").fadeTo(500, 0.4);
	
	$('#face').mouseenter(function() {
      
      $("#face").fadeTo(500, 1.0);	
	  $("#face").animate({right: '0px'});
});

$('#face').mouseleave(function() {
  
      $("#face").delay(3000).fadeTo(500, 0.4);	
	   $("#face").delay(1000).animate({right: '-210px'},function(){
		    $("#face").delay(4000).finish();
	   });	   
});      
});


