
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

	
	var endDate = new Date(Date.UTC(2016, 0, 23, 07, 00, 00));

	var days, hours, minutes, seconds;
	var MINUTES = 'MIN', SECONDS = 'SEC';

	// Countdown
	$('.content').countdown({
		date:endDate,
		render: function(data) {
			// days
			days = this.leadingZeros(data.days, 2);
			$('#days').text(days).append( "</br><span>DAYS</span>" );
			// hours
			hours = this.leadingZeros(data.hours, 2);
			$('#hours').text(hours).append( "</br><span>HOURS</span>" );
			// min
			minutes = this.leadingZeros(data.min, 2);
			$('#min').text(minutes).append( "</br><span>" + MINUTES + "</span>" );;
			// sec
			seconds = this.leadingZeros(data.sec, 2);
			$('#seconds').text(seconds).append( "</br><span>" + SECONDS + "</span>" );
		}


	});



	// Handle timeOuts of countdown
	showText();
	function showText() {
		$('#main_display_countdown .countdown_numbers_container').fadeOut(700);
		$('#main_display_countdown .countdown_text_container').fadeIn(700);
		setTimeout(function(){ 
			
			showText_2();
		}, 3000);
	}

	function showText_2() {
		$('#main_display_countdown .countdown_text_container').fadeOut(700);
		$('#main_display_countdown .countdown_text_container_2').fadeIn(700);
		setTimeout(function(){ 
			
			showCountdown();
		}, 3000);
	}

	
	function showCountdown(){
		$('#main_display_countdown .countdown_text_container_2').fadeOut(700);
		$('#main_display_countdown .countdown_numbers_container').fadeIn(700);
		setTimeout(function(){
			
			showText()
		}, 25000);
	}

	// setTimeout(function(){ alert("Hello"); }, 3000);





	function adjustText() {

		if (w >= 541) {
			MINUTES = 'MINUTES';
			SECONDS = 'SECONDS';
		} else {
			MINUTES = 'MIN';
			SECONDS = 'SEC';
		}
	}

	getWidth();
	function getWidth() {
		w = window.innerWidth;
		adjustText();
	}
	// Add resize event
	window.addEventListener( 'resize', function( e ) {

			getWidth();

	});

	function animate_elements_out() {
		$('#main_display_logo_star_monsters').removeClass().addClass('out');
		$('#main_display_countdown').removeClass().addClass('out');

	}

	function animate_elements_in() {
		$('#main_display_logo_star_monsters').removeClass().addClass('in');
		$('#main_display_countdown').removeClass().addClass('in');

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