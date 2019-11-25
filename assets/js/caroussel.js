$(document).ready(function(){
	// update the date for the copyright
	document.getElementById("year").innerHTML = new Date().getFullYear();

	// handle caroussel control
	$("div#myCarousel").hover(function(){

	  $("a.carousel-control-prev").fadeIn(150);
	  $("a.carousel-control-next").fadeIn(150);
	  
	},
	function(){
	  $("a.carousel-control-prev").fadeOut(150);
	  $("a.carousel-control-next").fadeOut(150);
	});

	
           
});