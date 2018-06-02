$(document).ready(function(){


	//Side bar menu toggle
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
		$(".menu-icon-toggle").toggleClass("menu-icon");
	});


})