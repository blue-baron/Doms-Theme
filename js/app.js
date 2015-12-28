/*jshint browser: true, devel: true, jquery: true*/
//Initialize foundation
$(document).foundation();


// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

/* -------------- Nav Visibility -------------- */

	$('.nav-title').hover(function(){
       $('#nav-wrapper .nav').slide('fast');
    
    }, function(){
    
        $(this).removeClass("hover");
        $('ul:first',this).css('visibility', 'hidden');
    
    });//end hover
     
	
/* -------------- flex video -------------- */
	$('iframe').wrap('<div class="flex-video"></div>');

});//end doc ready
