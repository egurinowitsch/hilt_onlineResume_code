// JavaScript Document





$(document).ready(function() {
	
	// Expand Panel
	$("#open").click(function(){
		$("div#panel2").slideUp(300);
		$("div#panel3").slideUp(300);
		$("div#panel4").slideUp(300);
		$("div#panel5").slideUp(300);
		$("div#panel6").slideUp(300);
		$("div#panel7").slideUp(300);
		$("div#panel8").slideUp(300, function(){
		$("div#panel").delay(350).slideToggle(800);
		});
	});	
	$("#open2").click(function(){
		$("div#panel").slideUp(300);
		$("div#panel3").slideUp(300);
		$("div#panel4").slideUp(300);
		$("div#panel5").slideUp(300);
		$("div#panel6").slideUp(300);
		$("div#panel7").slideUp(300);
		$("div#panel8").slideUp(300, function(){
		$("div#panel2").delay(350).slideToggle(800);
		});		
	});	
	$("#open3").click(function(){
		$("div#panel").slideUp(300);
		$("div#panel2").slideUp(300);
		$("div#panel4").slideUp(300);
		$("div#panel5").slideUp(300);
		$("div#panel6").slideUp(300);
		$("div#panel7").slideUp(300);
		$("div#panel8").slideUp(300, function(){
		$("div#panel3").delay(350).slideToggle(800);
		});		
	});	
	$("#open4").click(function(){
		$("div#panel").slideUp(300);
		$("div#panel2").slideUp(300);
		$("div#panel3").slideUp(300);
		$("div#panel5").slideUp(300);
		$("div#panel6").slideUp(300);
		$("div#panel7").slideUp(300);
		$("div#panel8").slideUp(300, function(){
		$("div#panel4").delay(350).slideToggle(800);
		});		
	});	
	$("#open5").click(function(){
		$("div#panel").slideUp(300);
		$("div#panel2").slideUp(300);
		$("div#panel3").slideUp(300);
		$("div#panel4").slideUp(300);
		$("div#panel6").slideUp(300);
		$("div#panel7").slideUp(300);
		$("div#panel8").slideUp(300, function(){
		$("div#panel5").delay(350).slideToggle(800);
		});		
	});	
	$("#open6").click(function(){
		$("div#panel").slideUp(300);
		$("div#panel2").slideUp(300);
		$("div#panel3").slideUp(300);
		$("div#panel4").slideUp(300);
		$("div#panel5").slideUp(300);
		$("div#panel7").slideUp(300);
		$("div#panel8").slideUp(300, function(){
		$("div#panel6").delay(350).slideToggle(800);
		});		
	});
	$("#open7").click(function(){
		$("div#panel").slideUp(300);
		$("div#panel2").slideUp(300);
		$("div#panel3").slideUp(300);
		$("div#panel4").slideUp(300);
		$("div#panel5").slideUp(300);
		$("div#panel6").slideUp(300);
		$("div#panel8").slideUp(300, function(){
		$("div#panel7").delay(350).slideToggle(800);
		});		
	});
	$("#open8").click(function(){
		$("div#panel").slideUp(300);
		$("div#panel2").slideUp(300);
		$("div#panel3").slideUp(300);
		$("div#panel4").slideUp(300);
		$("div#panel5").slideUp(300);
		$("div#panel6").slideUp(300);
		$("div#panel7").slideUp(300, function(){
		$("div#panel8").delay(350).slideToggle(800);
		});		
	});
	// Collapse Panel
	$("#close").click(function(){
		$("div#panel").slideToggle("hide");	
	});	
	$("#close2").click(function(){
		$("div#panel2").slideUp("slow");	
	});	
	$("#close3").click(function(){
		$("div#panel3").slideUp("slow");	
	});
	$("#close4").click(function(){
		$("div#panel4").slideUp("slow");	
	});
	$("#close5").click(function(){
		$("div#panel5").slideUp("slow");	
	});
	$("#close6").click(function(){
		$("div#panel6").slideUp("slow");	
	});
	$("#close7").click(function(){
		$("div#panel7").slideUp("slow");	
	});
	$("#close8").click(function(){
		$("div#panel8").slideUp("slow");	
	});
	
	
		
});