$(document).ready(function() {

skrollr.init()

/* --- Hero resize ----*/


$(function(){
        $(window).bind("load resize", function(){
            _winHeight = $(window).height()/100;
            // Setting Height
            $('.hero').css({'height':_winHeight * 80}); // 50% Height
        });
    });
    
 
 /* ----- sticky header -----*/
 
    
$(window).scroll(function(){ 
	if ($(window).scrollTop() > 100) {
	$('.top-bar-container').removeClass('start').addClass('sticky');
	} else if ($(window).scrollTop() < 100) {
	$('.top-bar-container').removeClass('sticky').addClass('start');
	}
});    
    
   
/* --- Images to background images --- */

$('.panel-grid-cell').has('img').each(function() {

$(this).css('background-image', 'url('+ $(this).find("img:first").attr("src") +')');
$(this).find("img:first").remove();


});
    
    
    


/*--- mousewheel detection ---- */


 
var scrolling = false;
var oldTime = 0;
var newTime = 0;
var isTouchPad;
var eventCount = 0;
var eventCountStart;
var callOnce = false;  

var mouseHandle = function (evt) {
    var isTouchPadDefined = isTouchPad || typeof isTouchPad !== "undefined";
    console.log(isTouchPadDefined);
    if (!isTouchPadDefined) {
        if (eventCount === 0) {
            eventCountStart = new Date().getTime();
        }

        eventCount++;

        if (new Date().getTime() - eventCountStart > 50) {
                if (eventCount > 5) {
                    isTouchPad = true;
                } else {
                    isTouchPad = false;
                }
            isTouchPadDefined = true;
        }
    }

    if (isTouchPadDefined) { // in this if-block you can do what you want
        // i just wanted the direction, for swiping, so i have to prevent
        // the multiple event calls to trigger multiple unwanted actions (trackpad)
        if (!evt) evt = event;
        var direction = (evt.detail<0 || evt.wheelDelta>0) ? 1 : -1;

        if (isTouchPad) {
            newTime = new Date().getTime();

            if (!scrolling && newTime-oldTime > 550 ) {
                scrolling = true;
                if (direction < 0) {
                    // swipe down
                } else {
                    // swipe up
                }
                setTimeout(function() {oldTime = new Date().getTime();scrolling = false}, 500);
            }
        } else {
        	if(!callOnce ){
        	$.getScript( "wp-content/themes/RoyaltonEquestrian/js/vendor/chromeSmoothScroll.min.js" );
        	console.log('called!');
        	   callOnce = true;
        	   }
        	
            if (direction < 0) {
                // swipe down
            } else {
                // swipe up
            }
        }
    }
}

document.addEventListener("mousewheel", mouseHandle, false);
document.addEventListener("DOMMouseScroll", mouseHandle, false);


    
    
    
    
    
});
