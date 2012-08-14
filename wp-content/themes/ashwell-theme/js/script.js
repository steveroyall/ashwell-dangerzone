/* Author:

*/

function initCarousel() {   
	if ($(".carousel").length) {
     	carouselMagic();   	
    }
}
carouselMagic = function(){
   $('.carousel ul').cycle({
		fx: 'fade',
		speed: 4000
	});
}

function initTabs(){
	if($('#tabs').length){
		tabsMagic();
		}
}
tabsMagic = function(){
$('#tabs').tabs({
        fx: { 
            opacity: 'toggle',
			duration:175
        }
    });

};

$(document).ready(function() {
	initCarousel();
	initTabs();	
	$('div.content').equalHeights();
	$('.lt-ie9 nav li:last-child').css('margin-right', '0px');
	
	
	
});





