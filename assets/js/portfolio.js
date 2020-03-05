$(document).ready(function(){
  $("div#scrolling-image > div").hover(function(){
    $("div#scrolling-image").css("animation-play-state", "paused");
    $(this).children("div.verticalCentered").show();
    },
    function(){
    $("div#scrolling-image").css("animation-play-state", "running");
    $(this).children("div.verticalCentered").hide();
    }
    );
});