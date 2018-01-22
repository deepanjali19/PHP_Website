
  $(function(){
     
    $(".p1").on({
	   	mouseenter: function(){
			$(this).css("background-color", "blue");
		            },
		mouseleave: function(){
			$(this).css("background-color", "pink");
		            },
		click: function(){
			$(this).css("font-size","48px");
		},
		dblclick: function(){
			$(this).css("font-size","20px");
		}
	}); 
	
	
	$("#b1").click(function(){
	        $(".p1").hide();
	 });
	 
	   
	 $("#b2").click(function(){
	     $(".p1").show();
	 });
	 
	 $("#b3").click(function(){
	          $(".p1").toggle();
	 })
	
   });

   
 