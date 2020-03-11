$(document).ready(function(){
	// update the date for the copyright
	document.getElementById("year").innerHTML = new Date().getFullYear();


$("div#myCarousel").css("height",$( window ).height()-60);
if ($( window ).width()<= 1030) {
	$("div#myCarousel img").css("height",(($( window ).height()-62)*2)/3);
	$("div.carousel-item > div.row >div:nth-child(2)").css("height",(($( window ).height()-62)*1)/3);
	$("img#img-webdev").attr("src", base_url+"assets/images/webdev-mobile.png");
	$("img#img-mobiledev").attr("src", base_url+"assets/images/mobile-mobile.png");
	$("img#img-softdev").attr("src", base_url+"assets/images/soft_image-mobile.png");
}
else{$("div#myCarousel img").css("height",$( window ).height()-62);}

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