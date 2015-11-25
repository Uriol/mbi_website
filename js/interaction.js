
function onLoad(){
	// Remove loading div
	$('.loading').fadeOut(800);
	
	// start scrolling when everything is loaded
	// $('body').css('overflow-y', 'scroll');
}

var w;

$(function() {

	onLoad();



	// Hover over the player
	$('.video_thumbnail').mouseenter( function() {
		// Add color and remove opacity
		$('#sm_cd_player_icon_container').css("background-color", 'rgb(161,27,34)');
	}).mouseleave( function() {
		$('#sm_cd_player_icon_container').css("background-color", 'rgba(0,0,0, 0.5)');
	})


	//var endDate = new Date(2016, 0, 25, 18, 40,0);
	var endDate = new Date(Date.UTC(2016, 0, 25, 08, 00, 00));
	//console.log('data in script: ' + endDate);
	//console.log('date from script: ' + endDate)

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

	

});