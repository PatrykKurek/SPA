$(document).ready(function(){
	$("#kolor1").click(function(){		
		$("#cennik2").slideUp();(200);
		$("#pionowe31").slideUp();(200);
		$("#pionowe32").slideUp();(200);
 		$("#pionowe11").slideDown();(500);	
		$("#pionowe12").slideDown();(750);
    });
	
	$("#kolor2").click(function(){
		$("#pionowe11").slideUp();(200);
		$("#pionowe12").slideUp();(400);		 
		$("#pionowe31").slideUp();(200);
		$("#pionowe32").slideUp();(400);
		$("#cennik2").slideDown();(1000);		
	});
		  
	$("#kolor3").click(function(){
		$("#pionowe31").slideDown();(200);
		$("#pionowe32").slideDown();(400); 
		$("#cennik2").slideUp();(200);
		$("#pionowe11").slideUp();(200);
		$("#pionowe12").slideUp();(400); 
	});
		  
	$("#fotocennik11").click(function(){		
		$("#zabiegi11").slideToggle(1200);	
	});
	
	$("#fotocennik12").click(function(){		
		$("#zabiegi12").slideToggle(1200);	
	});
	$("#fotocennik13").click(function(){		
		$("#zabiegi13").slideToggle(1200);	
	});
	$("#fotocennik14").click(function(){		
		$("#zabiegi14").slideToggle(1200);	
	});
	$("#fotocennik15").click(function(){		
		$("#zabiegi15").slideToggle(1200);	
	});
		  $("#fotocennik16").click(function(){		
    $("#zabiegi16").slideToggle(1200);	
		  });	
 $("#fotocennik17").click(function(){		
    $("#zabiegi17").slideToggle(1200);	
		  });
 $("#fotocennik18").click(function(){		
    $("#zabiegi18").slideToggle(1200);	
		  });
 $("#fotocennik19").click(function(){		
    $("#zabiegi19").slideToggle(1200);	
		  });		  
		  
		   $("#fotocennik31").click(function(){		
    $("#zabiegi31").slideToggle(1200);	
		  });
		  $("#fotocennik32").click(function(){		
    $("#zabiegi32").slideToggle(1200);	
		  });
		  $("#fotocennik33").click(function(){		
    $("#zabiegi33").slideToggle(1200);	
		  });
		  $("#fotocennik34").click(function(){		
    $("#zabiegi34").slideToggle(1200);	
		  });
		  $("#fotocennik35").click(function(){		
    $("#zabiegi35").slideToggle(1200);	
		  });
		  $("#fotocennik36").click(function(){		
    $("#zabiegi36").slideToggle(1200);	
		  });
		   $("#fotocennik37").click(function(){		
    $("#zabiegi37").slideToggle(1200);	
		  });
		   $("#fotocennik38").click(function(){		
    $("#zabiegi38").slideToggle(1200);	
		  });
		   $("#fotocennik39").click(function(){		
    $("#zabiegi39").slideToggle(1200);	
		  });
		   $("#fotocennik40").click(function(){		
    $("#zabiegi40").slideToggle(1200);	
		  });
		  
		  
		  $("#td30").click(function(){
	$("#p30").slideToggle(1000); 
		  });
		  
		  
});