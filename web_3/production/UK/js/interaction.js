
function onLoad(){
	// Remove loading div
	$('.loading').fadeOut(800);
	
	// start scrolling when everything is loaded
	// $('body').css('overflow-y', 'scroll');
}

var w;

// Players
var player_0,
	$players = [player_0];





var playing_zero = false,
	$playing = [ playing_zero ];

var index = 0;




	// Hover over the player
	$('.video_thumbnail').mouseenter( function() {
		// Add color and remove opacity
		$('#sm_cd_player_icon_container').css("background-color", 'rgb(161,27,34)');
	}).mouseleave( function() {
		$('#sm_cd_player_icon_container').css("background-color", 'rgba(0,0,0, 0.5)');
	})

	// YT video
	window.onYouTubeIframeAPIReady = function() {
		$players[0] = new YT.Player('player_sm_cd', {
			events: {
				'onStateChange': onPlayerStateChange
			}
		});
	}

	// Fire at play / stop
	// Player 0
	function onPlayerStateChange(e) {
		if(e.data == YT.PlayerState.PLAYING) {
			$('#star_mounster_cd_thumbnail').hide();
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
			//showThumbnail();
			$('#star_mounster_cd_thumbnail').show();
		}
	}

	// Play video on click
	$('.video_thumbnail').on('click', function() {
		$players[0].playVideo();
		//console.log($players[index])
	})

	
	

	function animate_elements_out() {
		$('#main_display_logo_star_monsters').removeClass().addClass('out');
		$('#main_display_title').removeClass().addClass('out');

	}

	function animate_elements_in() {
		$('#main_display_logo_star_monsters').removeClass().addClass('in');
		$('#main_display_title').removeClass().addClass('in');

	} 
	
	// Mobile detect
	var md = new MobileDetect(window.navigator.userAgent);

	// Device
	if(md.mobile() || md.tablet()){

		$('.video_thumbnail').css('pointer-events', 'none');

	} else {

	} 


$(function() {

	onLoad();

});