// JavaScript Document
onload = init;

function init(){
	
	document.getElementById("welcome_link").onmouseover = function(){home_continue();};
	document.getElementById("welcome_link").onmouseout = function(){home_continue2();};
	document.getElementById("contact_home").onmouseover = function(){contact_home();};
	document.getElementById("contact_home").onmouseout = function(){contact_home2();};
	document.getElementById("contact_home").onclick = function(){contact_home3();};
	document.getElementById("contact_home2").onmouseover = function(){contact_homea();};
	document.getElementById("contact_home2").onmouseout = function(){contact_homea2();};
	document.getElementById("contact_home2").onclick = function(){contact_homea3();};
}

function home_continue(){
	document.getElementById("timeline_welcomePage2").style.display = "block";
	document.getElementById("timeline_welcomePage").style.display = "none";
}
function home_continue2(){
	document.getElementById("timeline_welcomePage").style.display = "block";
	
	document.getElementById("timeline_welcomePage2").style.display = "none";
}
function contact_home(){
	document.getElementById("contact_home").className = "contact_home_hover";
}
function contact_home2(){
	document.getElementById("contact_home").className = "contact_home_hover2";
}
function contact_home3(){
	window.location.href = "contact.php";
}
function contact_homea(){
	document.getElementById("contact_home").className = "contact_home_hover";
}
function contact_homea2(){
	document.getElementById("contact_home").className = "contact_home_hover2";
}
function contact_homea3(){
	window.location.href = "contact.php";
}