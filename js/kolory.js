$('#kolor1').click(function(){ 
	 $("#kolor1").fadeTo(500, 1.0);
	 $("#kolor2").fadeTo(500, 0.2);
	 $("#kolor3").fadeTo(500, 0.2);   
   });
   $('#kolor2').click(function(){ 
   $("#kolor1").fadeTo(500, 0.2);
	 $("#kolor2").fadeTo(500, 1.0);
	 $("#kolor3").fadeTo(500, 0.2);   
   });
   $('#kolor3').click(function(){ 
  $("#kolor1").fadeTo(500, 0.2);
	 $("#kolor2").fadeTo(500, 0.2);
	 $("#kolor3").fadeTo(500, 1.0);    
   });
   