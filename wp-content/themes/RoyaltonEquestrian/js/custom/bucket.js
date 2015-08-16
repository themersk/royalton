$(document).ready(function() {

/*if( !(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {

skrollr.init();

}*/

/* --- Hero resize ----*/


$(function(){
        $(window).bind("load resize", function(){
            _winHeight = $(window).height()/100;
            // Setting Height
            $('.hero.front-hero').css({'height':_winHeight * 80}); // 80% Height
            $('.hero:not(.front-hero)').css({'height':_winHeight * 70}); // 60% Height

        });
    });
    
 
 
if(/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())){
	$('.hero, #splash').css({'background-attachment' : 'scroll'});
}
 
 
 /* ----- sticky header -----*/
 
    
$(window).scroll(function(){ 
	if ($(window).scrollTop() > 100) {
	$('.top-bar-container').removeClass('start').addClass('sticky');
	} else if ($(window).scrollTop() < 100) {
	$('.top-bar-container').removeClass('sticky').addClass('start');
	}
});    
    
   
/* --- Images to background images --- */

$('.image').each(function() {

$(this).css('background-image', 'url('+ $(this).find("img:first").attr("src") +')');
$(this).find("img:first").remove();


});
    
    
    

    
});
