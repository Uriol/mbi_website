
function onLoad(){
	// Remove loading div
	$('.loading').fadeOut(800);
	
	// start scrolling when everything is loaded
	// $('body').css('overflow-y', 'scroll');
}


$(function() {

	onLoad();



	// Hover over the player
	$('.video_thumbnail').mouseenter( function() {
		// Add color and remove opacity
		$('#sm_cd_player_icon_container').css("background-color", 'rgb(161,27,34)');
	}).mouseleave( function() {
		$('#sm_cd_player_icon_container').css("background-color", 'rgba(0,0,0, 0.5)');
	})




});