

var mouse_in_products_menu = false;
var mouse_in_products_submenu = false; 

var submenu_on_mobile = false;

var small_menu_on = false;

$(function(){


	// Mobile detect
	var md = new MobileDetect(window.navigator.userAgent);

	// Device
	if(md.mobile() || md.tablet()){
		
		// click on Products menu
		$('ul.main_menu li.menu_item#red_item').on('click', function() {
			// Show submenu
			if (submenu_on_mobile == false) {
				$('article#submenu').removeClass().addClass('on');
				// Products in red
				$('ul.main_menu li.menu_item#red_item').addClass('red');
				setTimeout(submenuIsOn, 400);
			}
		})

		// Click anywhere to close it
		$('section.content').on('click'  , function(e) {
			if (submenu_on_mobile == true) {
				if(!$(e.target).closest('article#submenu').length) {
					// Outside
					$('article#submenu').removeClass().addClass('out');
					$('ul.main_menu li.menu_item#red_item').removeClass('red');
					submenu_on_mobile = false;
				} else {
					
				}
			}
		})

		function submenuIsOn(){
			submenu_on_mobile = true;
		}


	} else {
		
		// Show Products submenu when hover
		// Detect hover in main menu
		$('ul.main_menu li.menu_item#red_item').on('mouseenter', function(){
			$('article#submenu').removeClass().addClass('on');
			mouse_in_products_menu = true;
			
		}).on('mouseleave', function(){
			mouse_in_products_menu = false;
			setTimeout(trackMouseIn, 200);

		})

		// Detect when mouse is on submenu
		$('article#submenu').on('mouseenter', function(){
			mouse_in_products_submenu = true;
			
		}).on('mouseleave', function(){
			mouse_in_products_submenu = false;

			setTimeout(trackMouseIn, 200);
			
		})

		// When mouse leave an element wait a few millisec to check if it still in (menu/submeni)
		function trackMouseIn(){

			if (mouse_in_products_menu == false && mouse_in_products_submenu == false) {
				$('article#submenu').removeClass().addClass('out');
			}
		}

		// 	SM mouse in (submenu)
		
		// Z mouse in (submenu)
		$('#submenu_product_two').on('mouseenter', function(){
			$(this).removeClass().addClass('submenu_product_in');
		}).on('mouseleave', function() {
			$(this).removeClass().addClass('submenu_product_out');
		})

	}


	// Handle submenu for small display (mobile)
	$(document).on('click', '.menu_mobile_submenu_icon.off', function() {
		// This add class as on
		$(this).removeClass('off').addClass('on');
		// Onshow bg info
		$('section.content').hide();
		// Show submenu
		$('.submenu').removeClass('off').addClass('on');
		small_menu_on = true;
	});
	$(document).on('click', '.menu_mobile_submenu_icon.on', function() {
		// This add class as on
		$(this).removeClass('on').addClass('off');
		// Show bg info
		$('section.content').show();
		// Show submenu
		$('.submenu').removeClass('on').addClass('off');
		small_menu_on = false;
	})
	

	var w;
	//  Detect when small menu its on and the screen goes big
	window.addEventListener( 'resize', function( e ) {

		w = window.innerWidth;
		if (small_menu_on == true && w >= 541) {
			$('.menu_mobile_submenu_icon').removeClass('on').addClass('off');
			// Show bg info
			$('section.content').show();
			// Show submenu
			$('.submenu').removeClass('on').addClass('off');
			small_menu_on = false;
			}

	});

	
})