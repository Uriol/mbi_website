
var $video_colors = ['rgb(161,27,34)', 'rgb(161,27,34)', 'rgb(161,27,34)', 'rgb(0, 160, 50)']

function onLoad(){
	// Remove loading div
	$('.loading').fadeOut(800);
}

//  Players 
var player_1, player_2, player_3, player_4, player_5, player_6;
var $players = [player_1, player_2, player_3, player_4, player_5, player_6];

var index = 0;


var $games = ['game_1', 'game_2', 'game_3', 'game_4', 'game_5', 'game_6'];

$(function(){

	onLoad();

	//  Play video on click
	$('.video_thumbnail').on('click', function(){
		index = $(this).data('index');
		$players[index].playVideo();
	})

	//  Declare Youtube videos
	window.onYouTubeIframeAPIReady = function() {
		//  Game 2
		$players[1] = new YT.Player('player_game_2', {
			events: {
				'onStateChange': onPlayerStateChange_two
			}
		});

		//  Game 4
		$players[3] = new YT.Player('player_game_4', {
			events: {
				'onStateChange': onPlayerStateChange_four
			}
		});
	}

	// Fire at play / stop
	// Player 2
	function onPlayerStateChange_two(e){
		if(e.data == YT.PlayerState.PLAYING) {

			$('#game_2_video_thumbnail').hide();

		} else if (e.data == YT.PlayerState.PAUSED) {

		} else if ( e.data == YT.PlayerState.ENDED ) {

			$('#game_2_video_thumbnail').show();

		}
	}
	// Player 4
	function onPlayerStateChange_four(e){
		if(e.data == YT.PlayerState.PLAYING) {

			$('#game_4_video_thumbnail').hide();

		} else if (e.data == YT.PlayerState.PAUSED) {

		} else if ( e.data == YT.PlayerState.ENDED ) {

			$('#game_4_video_thumbnail').show();
		}
	}

	// Hover over player
	$('.video_thumbnail').mouseenter( function() {
		index = $(this).data('index');
		// Add colors and remove opacity
		$('#' + $games[index] + '_player_icon_container').css('background-color', $video_colors[index]);
	}).mouseleave( function() {
		$('#' + $games[index] + '_player_icon_container').css('background-color', 'rgba(0,0,0,0.5)');
	})


	// Mobile detect
	var md = new MobileDetect(window.navigator.userAgent);

	// Device
	if(md.mobile() || md.tablet()){

		$('.video_thumbnail').css('pointer-events', 'none');

	} else {

	}


});