

var index = 0;
var $series = ['series_one'];
var $series_colors = ['rgb(161,27,34)'];

var playing_zero = false;
var $playing = [playing_zero];

var player_0;
var $players = [player_0];




function onLoad(){
	// Remove loading div
	$('.loading').fadeOut(800);
	
	// start scrolling when everything is loaded
	// $('body').css('overflow-y', 'scroll');
}


$(function() {

	onLoad();

	//  YT videos
	window.onYouTubeIframeAPIReady = function() {
		$players[0] = new YT.Player('player_series_one', {
			events: {
				'onStateChange': onPlayerStateChange_zero
			}
		});
	}

	// Player 0
	function onPlayerStateChange_zero(e) {
		if(e.data == YT.PlayerState.PLAYING) {
			$('#' + $series[index] + '_video_thumbnail').hide();
			// animate_elements_out();
			$playing[index] = true;
		} else if (e.data == YT.PlayerState.PAUSED) {
			// animate product in
			// animate_elements_in();
			$playing[index] = false;
		} else if ( e.data == YT.PlayerState.ENDED ) {
			// animate product in
			// animate_elements_in();
			$playing[index] = false;
			showThumbnail();
		}
	}

	// When video is finished show thumbnail again
	function showThumbnail() {
		$('#' + $series[index] + '_video_thumbnail').show();
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
		//$('#' + $series[index] + '_video_thumbnail').hide();
		$players[index].playVideo();
	})


})