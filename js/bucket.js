$(document).ready(function(){
	
$(window).scroll(function() {
var scrollTop = $(window).scrollTop();
	if (scrollTop > 200) {
		$('.sticky-menu').css({'opacity':'1'});
	}
	if (scrollTop <= 200) {
		$('.sticky-menu').css({'opacity':'0'});
	}
});

$('.sticky-two').waypoint(function(direction){
	if (direction === 'down') {
	$('.sticky-two').addClass('sticky-under');
	}
	}, {offset: '80px'});
$('.sticky-two').waypoint(function(direction){
	if (direction === 'up') {
	$('.sticky-two').removeClass('sticky-under');
		}
		}, {offset: '80px'});

	
	
});