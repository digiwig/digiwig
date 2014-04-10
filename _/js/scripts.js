


$(document).ready(function() {

	/* TOGGLE OFF CANVAS MENU OPEN/CLOSED */
	menus = document.querySelectorAll("header,main,nav");					   
	header = document.getElementById("header");	
	header.addEventListener("click", menu, false);
	header.addEventListener("touchend", menu, false);	
	header.addEventListener("touchmove", function(event){event.preventDefault()}, false);
	function menu(event) {
		event.preventDefault();
		$(menus).toggleClass("menu");
		$("nav a").removeClass("menu").addClass("menu");
		setTimeout(function () {
		$("nav a").each(function(index){
			  var self = this
			  setTimeout(function () {
					$(self).removeClass("menu");
			  }, index*100);														  
		});
		}, 250);
	}						   

	/* RANDOM BACKGROUND COLOURS */	
	setInterval(function() {
		var colour = '#'+Math.floor(Math.random()*16777215).toString(16);
		$("#main").css("background-color", colour);
	}, 30000);

});	

$(window).load(function(){					
});

$(window).resize(function() {						  
});

$(window).scroll(function() {
});

$(document).keydown(function(event) {					 
});