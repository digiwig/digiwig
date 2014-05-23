function exist(element) {
	if ($(element).length !="0") {	
		return true;		
	} else {
		return false;	
	}
}





$(document).ready(function() {
						   

	/* SERVICES PAGE BOXES */
/*	var dragging = false;
	$("#services figure").each(function() {
		var id = $(this).attr("id");
		document.getElementById(id).addEventListener("touchmove", function(event){dragging = true;}, false);
	});

	$("#services figure").bind("click, touchend", box);
	$("#services figure a").bind("click", box);
	
	function box(event) {
		if(!dragging) {
			event.preventDefault();
			if(event.type == "touchend") {
				var figure = this;
				var button = $(this).children("a");
			} else {
				var figure = $(this).parent("figure");
				var button = this;
				
			}
			if($(figure).hasClass("open")) {
				$(figure).removeClass("open");
				$(button).text("Open");
			} else {
				$("#services figure").removeClass("open");
				$("#services figure a").text("Open");
				$(figure).addClass("open");
				$(button).text("Close");
			}
		}
		dragging = false;
	}
	
	if(window.location.hash) {
		id = window.location.hash.replace('#', '');
		figure = $("figure#"+id);
		figure.trigger("touchend");
	}*/

	   

	/* TOGGLE OFF CANVAS MENU OPEN/CLOSED */
	menus = document.querySelectorAll("header,main,nav,nav a");	
	main  = document.querySelectorAll("main");	
	header = document.getElementById("header");
	header.addEventListener("click", menu, false);
	header.addEventListener("touchend", menu, false);	
	header.addEventListener("touchmove", function(event){event.preventDefault()}, false);
	cross = document.getElementById("close");
	cross.addEventListener("touchend", menu, false);	
	cross.addEventListener("touchmove", function(event){event.preventDefault()}, false);
	function menu(event) {
		event.preventDefault();
		$(menus).toggleClass("menu");
		$("nav a").each(function(index){
			var self = this
			setTimeout(function () {
				$(self).removeClass("menu");
			}, index*100);														  
		});
	}						   

	/* RANDOM BACKGROUND COLOURS */
	function ColorLuminance(hex, lum) {
		hex = String(hex).replace(/[^0-9a-f]/gi, '');
		if (hex.length < 6) {
			hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
		}
		lum = lum || 0;
		var rgb = "#", c, i;
		for (i = 0; i < 3; i++) {
			c = parseInt(hex.substr(i*2,2), 16);
			c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
			rgb += ("00"+c).substr(c.length);
		}
		return rgb;
	}
	var colours = ['9c6e81','89ae95','5b4f66','c4c583','676bb5','269c6f','449fa3','8091d1','c18c7b','32596e','aba1a9','4794ac','34C7DD','d9b4be','6e909c','7a8f88','6e7e9c','b15b58','d0dc9a','ec8672','bcd3ea','c5c5c5','b5b5b5','b15883','a5a5a5','d5d5d5'];
	setInterval(function() {
		var colour = '#'+Math.floor((Math.random()*16777215) + 127).toString(16);
		//var colour = '#'+colours[Math.floor(Math.random() * colours.length)];
		//$("p").css("color", ColorLuminance(colour, -0.5));
		$("header").css("background-color", ColorLuminance(colour, -0.7));
		$("a.active").css("color", ColorLuminance(colour, 0.5));
		$(main).css("background-color", colour).css("border-color", colour);
	}, 15000);

});	

$(window).load(function(){				
	$("header, main").addClass("load");
});

$(window).resize(function() {						  
});

$(window).scroll(function() {
});

$(document).keydown(function(event) {					 
});