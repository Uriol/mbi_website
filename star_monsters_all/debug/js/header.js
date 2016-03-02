
var mobile_submenu_on = false;
var w;

$(function(){

	// Handle submenu for small display (mobile)
	$(document).on('click', '.menu_mobile_submenu_icon.off', function() {
		// This add class as on
		$(this).removeClass('off').addClass('on');
		// Hide bg info
		$('section.content').hide();
		// Show submenu
		$('.submenu_mobile').removeClass('off').addClass('on');
		mobile_submenu_on = true;
	})
	$(document).on('click', '.menu_mobile_submenu_icon.on', function() {
		// This add class as on
		$(this).removeClass('on').addClass('off');
		// Show bg info
		$('section.content').show();
		// Show submenu
		$('.submenu_mobile').removeClass('on').addClass('off');
		mobile_submenu_on = false;
	})


	//  Detect when mobile submenu is on and the screen goes big
	window.addEventListener('resize', function(e) {

		w = window.innerWidth;
		if (mobile_submenu_on == true && w >= 541) {
			$('.menu_mobile_submenu_icon').removeClass('on').addClass('off');
			// Show bg info
			$('section.content').show();
			// Show submenu
			$('.submenu_mobile').removeClass('on').addClass('off');
			mobile_submenu_on = false;
			}
		
	})

})