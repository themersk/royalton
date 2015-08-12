$(document).ready(function() {

skrollr.init()


$(function(){
        $(window).bind("load resize", function(){
            _winHeight = $(window).height()/100;
            // Setting Height
            $('.hero').css({'height':_winHeight * 80}); // 50% Height
        });
    });
    
    
    
    
    
    
    
    
    
    
});
