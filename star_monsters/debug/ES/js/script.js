
var index = 0;
var $series = ['the_movie', 'series_one'];
var $series_colors = ['rgb(161,27,34)', 'rgb(161,27,34)'];

var playing_zero = false, playing_one = false;
var $playing = [ playing_zero, playing_one ];

var player_0, player_1;
var $players = [player_0, player_1];


$(function(){

});

	// Handle series switch on the arrows controls
	// LEFT
	$('.control_left_container').on('click', function(){
		// Turn off actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('on').addClass('off');
		// Hide actual serie
		hideSerie();
		// If Movie is displayed --> start from last
		if ( index == 0 ) {
			index = $series.length-1;
		} else {
			index -= 1;
		}
		// Show actual serie main display
		$('#' + $series[index] + '').show();
		// Turn on actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('off').addClass('on');
	});
	// RIGHT
	$('.control_right_container').on('click', function() {
		// Turn off actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('on').addClass('off');
		hideSerie();
		// If Series (Last) start from first
		if ( index == $series.length-1 ) {
			index = 0;
		} else {
			index += 1;
		}
		// Show actual serie main display
		$('#' + $series[index] + '').show();
		// Turn on actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('off').addClass('on');
	})

	// Handle series switch from the menu
	$(document).on('click', '.main_display_series_menu ul li.off', function(){
		// Turn off actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('on').addClass('off');
		// Hide actual serie
		hideSerie();
		index = $(this).data('index');
		// Show actual serie main display
		$('#' + $series[index] + '').show();
		// Turn on actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('off').addClass('on');
	});

	function hideSerie() {
		// Hide actual serie main display
		$('#' + $series[index] + '').hide();
		// If playing video stop it
		if( $playing[index] == true) {
			$players[index].stopVideo();
			// animate elements in
			animate_elements_in();
			showThumbnail();
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
		$players[index].playVideo();
		console.log('clicked')
	})

	// When video is finished show thumbnail again
	function showThumbnail() {
		$('#' + $series[index] + '_video_thumbnail').show();
	}

	// Youtube videos
	window.onYouTubeIframeAPIReady = function() {
		$players[0] = new YT.Player('player_the_movie', {
			events: {
				'onStateChange': onPlayerStateChange_zero
			}
		});

		$players[1] = new YT.Player('player_series_one', {
			events: {
				'onStateChange': onPlayerStateChange_one
			}
		});
	}

		// Fire at play / stop
	// Player 0
	function onPlayerStateChange_zero(e) {
		if(e.data == YT.PlayerState.PLAYING) {
			$('#' + $series[index] + '_video_thumbnail').hide();
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
			$('#' + $series[index] + '_video_thumbnail').hide();
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

	function animate_elements_out() {
		$('#main_display_logo_star_monsters').removeClass().addClass('out');
		$('#left_img_main_display_s_one').removeClass().addClass('out');
		$('#right_img_main_display_s_one').removeClass().addClass('out');
	}

	function animate_elements_in() {
		$('#main_display_logo_star_monsters').removeClass().addClass('in');
		$('#left_img_main_display_s_one').removeClass().addClass('in');
		$('#right_img_main_display_s_one').removeClass().addClass('in');
	} 	
