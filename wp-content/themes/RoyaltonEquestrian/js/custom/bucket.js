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
            $('.hero:not(.main-hero)').css({'height':_winHeight * 70}); // 60% Height
            $('.hero.images-section').css({'height':_winHeight * 100}); // 80% Height

        });
    });
    
 
 
 /* ----- SCROLL FUNCTIONS -----*/
 


$('.inner-inner-wrap').scroll(function(){ 


 /* ----- sticky header -----*/
var position = $(".container").offset().top;
	if (position <= -100) {
	$('.top-bar-container').removeClass('start').addClass('sticky');
	} else if (position > -100) {
	$('.top-bar-container').removeClass('sticky').addClass('start');
	}
	
	
	
	
if( !(ismobile)) {
	
 /* ----- sticky subnav -----*/
if ($('.subnav-bar').length) {
var subnavposition = $(".subnav-bar").offset().top;
console.log(subnavposition) ;
	if (subnavposition <= 100) {
		$('.subnav-bar').addClass('sticky');
		$('.top-bar-container.sticky').css({'box-shadow' : 'none'});
	}
	if ($(".grandprix-section").offset().top > 100) {
		$('.subnav-bar').removeClass('sticky');
		$('.top-bar-container.sticky').css({'box-shadow' : '0px 4px 2px rgba(0, 0, 0, 0.3);'});
	}
	}
	
 /* ----- subnav highlighting -----*/
 
 

 /* ----- scrollbar width accomodation  -----*/	
	
	$('.subnav-bar.sticky').css({'width' : 'calc(100% - 1em)'});
	$('.top-bar-container.sticky').css({'width' : 'calc(100% - 1em)'});
	
	
	
	}
	
	
});    

    
   
/* --- Images to background images --- */


$('.image').each(function() {

      
$(this).css('background-image', 'url('+ $(this).attr("data-original") +')');
if( !(ismobile)) {
	$(this).lazyload({ effect : "fadeIn"  });  
}
});
  
    
    

/* --- Smooth scrolling to anchor tags ----- */

    
      // scroll handler
  var scrollToAnchor = function( id ) {
 
    // grab the element to scroll to based on the name
    var elem = $("a[name='"+ id +"']");
 
    // if that didn't work, look for an element with our ID
    if ( typeof( elem.offset() ) === "undefined" ) {
      elem = $("#"+id);
    }
 
    // if the destination element exists
    if ( typeof( elem.offset() ) !== "undefined" ) {
 
      // do the scroll
      $('.inner-inner-wrap').animate({
              scrollTop: elem.offset().top + ($(window).height() * 0.75)
      }, 1000 );
 
    }
  };
 
  // bind to click event
  $("ul.subnav li, ul.subnav-bar li").click(function( event ) {
 
    // only do this if it's an anchor link
 
      // cancel default event propagation
      event.preventDefault();
 
      // scroll to the location
      var href = $(this).attr('class').replace('#', '')
      scrollToAnchor( href );
      console.log(href);
 
  });
 

    
/* ------ is elementvisible? ----- */




    
});
