$(document).ready(function() {

var ismobile = false;

if( (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
		ismobile = true;
}


if (!ismobile) {
/*	$(function () { // wait for document ready
	var controller = new ScrollMagic.Controller();

		// build tween
		var tween = new TimelineMax ()
			.add([
				TweenMax.to(".hero #splash", 1, {backgroundPosition: "-500 0", ease: Linear.easeNone}),
			]);

		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: ".hero", duration: 2000, offset: 450})
						.setTween(tween)
						.setPin(".hero")
						.addTo(controller);
	});*/

}
/* --- Hero resize ----*/


$(function(){
        $(window).bind("load resize", function(){
            _winHeight = $(window).height()/100;
            // Setting Height
            splashHeight = _winHeight * 80;
            $('.hero.main-hero').css({'height':_winHeight * 80}); // 80% Height
            $('.hero:not(.front-hero)').css({'height':_winHeight * 70}); // 60% Height

        });
    });
    
 
 
if((/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) || ismobile ){
	$('.hero, #splash').css({'background-attachment' : 'scroll'});
}
 
 
 /* ----- sticky header -----*/
 

$('.inner-inner-wrap').scroll(function(){ 
var position = $(".container").offset().top;
	if (position <= -100) {
	$('.top-bar-container').removeClass('start').addClass('sticky');
	} else if (position > -100) {
	$('.top-bar-container').removeClass('sticky').addClass('start');
	}
	
	if( !(ismobile)) {
	
	$('.top-bar-container.sticky').css({'width' : 'calc(100% - 1em)'});
	}
	

});    

    
   
/* --- Images to background images --- */

$('.image').each(function() {

$(this).css('background-image', 'url('+ $(this).find("img:first").attr("src") +')');
$(this).find("img:first").remove();


});
    
    
    

    
});
