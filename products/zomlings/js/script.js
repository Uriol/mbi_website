

var index = 0;
var $series = ['series_one', 'series_two', 'series_three', 'series_four', 'special'];
var $series_colors = ['rgb(226,35,26)', 'rgb(255,163,0)' , 'rgb(119,188,31)', 'rgb(150,51,158)', 'rgb(150,51,158)'];

var playing_zero = false, playing_one = false, playing_two = false, playing_three = false;
var $playing = [ playing_zero, playing_one, playing_two, playing_three ];

var player_0, player_1, player_2, player_3;
var $players = [player_0, player_1, player_2, player_3];


// Galleries 
var $series_galleries = [$series_one_gallery];
var $series_one_gallery = ['url("img/s1/gallery/img_one.png")', 'url("img/s1/gallery/img_two.png")', 'url("img/s1/gallery/img_three.png")']
var gallery_index = 0;


function onLoad(){
	// Remove loading div
	$('.loading').fadeOut(800);
	
	// start scrolling when everything is loaded
	$('body').css('overflow-y', 'scroll');
}

$(function(){

	onLoad();

	//  Handle series selector
	function updateSelector(){
		$('#series_selector').removeClass().addClass($series[index] + '_selector');
	}

	// Handle series switch on the arrows controls
	// LEFT 
	$('.control_left_container').on('click', function() {
		// Turn off actual menu item
		// $('#' + $series[index] + '_menu_item').removeClass('on').addClass('off');

		// Turn off actual index item
		$('#' + $series[index] + '_index_item').removeClass('on').addClass('off');
		// Hide actual serie
		hideSerie();
		// If Series 1 --> start from last
		if ( index == 0 ) {
			index = $series.length-1;
		} else {
			index -= 1;
		}
		// Update selector
		$('#series_selector').removeClass().addClass($series[index] + '_selector');
		// Show actual serie main display
		$('#' + $series[index] + '').show();
		// Show actual serie info
		$('#' + $series[index] + '_info').show();
		// Turn on actual menu item
		// $('#' + $series[index] + '_menu_item').removeClass('off').addClass('on');
		// Turn on actual index item
		$('#' + $series[index] + '_index_item').removeClass('off').addClass('on');
	})
	// RIGHT
	$('.control_right_container').on('click', function() {
		// Turn off actual menu item
		// $('#' + $series[index] + '_menu_item').removeClass('on').addClass('off');

		// Turn off actual index item
		$('#' + $series[index] + '_index_item').removeClass('on').addClass('off');
		// Hide actual serie
		hideSerie();
		// If Series 4 (Last) start from first
		if ( index == $series.length-1 ) {
			index = 0;
		} else {
			index += 1;
		}
		// Update selector
		$('#series_selector').removeClass().addClass($series[index] + '_selector');
		// Show actual serie main display
		$('#' + $series[index] + '').show();
		// Show actual serie info
		$('#' + $series[index] + '_info').show();
		// Turn on actual menu item
		// $('#' + $series[index] + '_menu_item').removeClass('off').addClass('on');
		// Turn on actual index item
		$('#' + $series[index] + '_index_item').removeClass('off').addClass('on');
	})
	// Hover over control arrows
	

	// Handle series switch on the menu
	$(document).on('click', '.series_menu_item.off', function(){
		// Turn off actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('on').addClass('off');
		// Hide actual serie
		hideSerie();
		index = $(this).data('index');
		// Update selector
		$('#series_selector').removeClass().addClass($series[index] + '_selector');
		// Show actual serie main display
		$('#' + $series[index] + '').show();
		// Show actual serie info
		$('#' + $series[index] + '_info').show();
		// Turn on actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('off').addClass('on');
		//$('.control_left_container').css('background-color', $series_colors[index]);
	});
	// // Handle series switch on the index
	$(document).on('click', '.series_index_item.off', function(){
		// Turn off actual index item
		$('#' + $series[index] + '_index_item').removeClass('on').addClass('off');
		// Hide actual serie
		hideSerie();
		index = $(this).data('index');
		// Update selector
		$('#series_selector').removeClass().addClass($series[index] + '_selector');
		// Show actual serie main display
		$('#' + $series[index] + '').show();
		// Show actual serie info
		$('#' + $series[index] + '_info').show();
		// Turn on actual index item
		$('#' + $series[index] + '_index_item').removeClass('off').addClass('on');
		//$('.control_left_container').css('background-color', $series_colors[index]);
	});

	function hideSerie(){
		// Hide actual serie MAIN DISPLAY
		$('#' + $series[index] + '').hide();
		// Hide actual serie info
		$('#' + $series[index] + '_info').hide();
		// If video playing then stop it
		if( $playing[index] == true ) {
			$players[index].stopVideo();
			// animate elements in
			animate_elements_in();
		}
	}


	// Hover over the player
	$('.video_thumbnail').mouseenter( function() {
		// Add color and remove opacity
		$('#' + $series[index] + '_player_icon_container').css("background-color", $series_colors[index]);
	}).mouseleave( function() {
		$('#' + $series[index] + '_player_icon_container').css("background-color", 'rgba(0,0,0, 0.5)');
	})

	// Play video on click
	$('.video_thumbnail').on('click', function(){
		// Hide thumbnail
		$('#' + $series[index] + '_video_thumbnail').hide();
		$players[index].playVideo();
	})

	// When video is finished show thumbnail again
	function showThumbnail() {
		$('#' + $series[index] + '_video_thumbnail').show();
	}


	// Youtube videos
	window.onYouTubeIframeAPIReady = function() {
		$players[0] = new YT.Player('player_series_one', {
			events: {
				'onStateChange': onPlayerStateChange_zero
			}
		});

		$players[1] = new YT.Player('player_series_two', {
			events: {
				'onStateChange': onPlayerStateChange_one
			}
		});

		$players[2] = new YT.Player('player_series_three', {
			events: {
				'onStateChange': onPlayerStateChange_two
			}
		});

		$players[3] = new YT.Player('player_series_four', {
			events: {
				'onStateChange': onPlayerStateChange_three
			}
		});
	}

	// Fire at play / stop
	// Player 0
	function onPlayerStateChange_zero(e) {
		if(e.data == YT.PlayerState.PLAYING) {
			// animate product out
			animate_elements_out();
			$playing[index] = true;
		} else if (e.data == YT.PlayerState.PAUSED) {
			// animate product in
			animate_elements_in();
			$playing[index] = false;
		} else if ( e.data == YT.PlayerState.ENDED ) {
			// animate product in
			animate_elements_in();
			$playing[index] = false;
			showThumbnail();
		}
	}

	// Player 1
	function onPlayerStateChange_one(e) {
		if(e.data == YT.PlayerState.PLAYING) {
			// animate product out
			animate_elements_out();
			$playing[index] = true;
		} else if (e.data == YT.PlayerState.PAUSED) {
			// animate product in
			animate_elements_in();
			$playing[index] = false;
		} else if ( e.data == YT.PlayerState.ENDED ) {
			// animate product in
			animate_elements_in();
			$playing[index] = false;
			showThumbnail();
		}
	}
	// Player 2
	function onPlayerStateChange_two(e) {
		if(e.data == YT.PlayerState.PLAYING) {
			// animate product out
			animate_elements_out();
			$playing[index] = true;
		} else if (e.data == YT.PlayerState.PAUSED) {
			// animate product in
			animate_elements_in();
			$playing[index] = false;
		} else if ( e.data == YT.PlayerState.ENDED ) {
			// animate product in
			animate_elements_in();
			$playing[index] = false;
			showThumbnail();
		}
	}
	// Player 3
	function onPlayerStateChange_three(e) {
		if(e.data == YT.PlayerState.PLAYING) {
			// animate product out
			animate_elements_out();
			$playing[index] = true;
		} else if (e.data == YT.PlayerState.PAUSED) {
			// animate product in
			animate_elements_in();
			$playing[index] = false;
		} else if ( e.data == YT.PlayerState.ENDED ) {
			// animate product in
			animate_elements_in();
			$playing[index] = false;
			showThumbnail();
		}
	}




	// Animate elements -----------------------------------------------------------------
	function animate_elements_out() {
		$('#main_display_logo_zomlings').removeClass().addClass('out');
	}

	function animate_elements_in() {
		$('#main_display_logo_zomlings').removeClass().addClass('in');
	}  



	//  Handle hover on product image
	// $('.product_content_container').on('mouseenter', function() {
	// 	console.log('in')
	// 	$('.product_image_container', this).hide();
	// 	$('.product_info_container', this).show();
	// }).on('mouseleave', function() {
	// 	$('.product_info_container', this).hide();
	// 	$('.product_image_container', this).show();
	// })
	

	$(document).on('click', '.gallery_index_item_off', function(){
		
		// Remove 'on' class from gallery index item
		$('#' + $series[index] + '_gallery_index_container .gallery_index_item_on').removeClass().addClass('gallery_index_item_off')
		// Add class for clicked gallery index item
		$(this).removeClass().addClass('gallery_index_item_on');
		// Hide actual image
		gallery_index = $(this).data('index');
		// Get serie. Show new pic
		$('#' + $series[index] + '_pic').css('background-image', $series_one_gallery[gallery_index]);
		console.log('pic' + $series_one_gallery[gallery_index])



	}) 

	// Handle gallery image
	function changeImage() {
		// Hide actual image
		gallery_index = $(this).data('index');
		console.log('gallery index: ' + gallery_index)
		// Get serie. Show new pic
		$('#' + $series[index] + '_pic').css('background-image', $series_galleries[index][gallery_index]);
		console.log('pic' + $series_one_gallery[gallery_index])
	}

	

})