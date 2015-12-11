

var index = 0;
var $series = ['series_one', 'series_two', 'series_three', 'series_four', 'special'];
var $series_colors = ['rgb(190,22,33)', 'rgb(255,163,0)' , 'rgb(119,188,31)', 'rgb(150,51,158)', 'rgb(0,114,175)'];

var playing_zero = false, playing_one = false, playing_two = false, playing_three = false;
var $playing = [ playing_zero, playing_one, playing_two, playing_three ];

var player_0, player_1, player_2, player_3;
var $players = [player_0, player_1, player_2, player_3];


var $series_galleries = [['url("img/s1/gallery/img_one.png")', 'url("img/s1/gallery/img_two.png")', 'url("img/s1/gallery/img_three.png")'], 
						['url("img/s2/gallery/img_one.png")', 'url("img/s2/gallery/img_two.png")', 'url("img/s2/gallery/img_three.png")'], 
						['url("img/s3/gallery/img_one.png")', 'url("img/s3/gallery/img_two.png")', 'url("img/s3/gallery/img_three.png")'],
						['url("img/s4/gallery/img_one.png")', 'url("img/s4/gallery/img_two.png")', 'url("img/s4/gallery/img_three.png")']];

var $series_gallery_index = [0,0,0,0,0];
var gallery_index;

function onLoad(){
	// Remove loading div
	$('.loading').fadeOut(800);
	
	// start scrolling when everything is loaded
	$('body').css('overflow-y', 'scroll');
}

$(function(){

	onLoad();

	loadImages();
	// Load images
	function loadImages(){
		thumbnail1 = new Image(); 
		thumbnail1.src = "img/s1/s1_thumbnail.png";
		thumbnail2 = new Image(); 
		thumbnail2.src = "img/s2/s2_thumbnail.png";
		thumbnail3 = new Image(); 
		thumbnail3.src = "img/s3/s3_thumbnail.png";
		thumbnail4 = new Image(); 
		thumbnail4.src = "img/s4/s4_thumbnail.png";

		//  Gallery images
		gallery_1_1 = new Image();
		gallery_1_1.src = 'img/s1/gallery/img_one.png';
		gallery_1_2 = new Image();
		gallery_1_2.src = 'img/s1/gallery/img_two.png';
		gallery_1_3 = new Image();
		gallery_1_3.src = 'img/s1/gallery/img_three.png';

		gallery_2_1 = new Image();
		gallery_2_1.src = 'img/s2/gallery/img_one.png';
		gallery_2_2 = new Image();
		gallery_2_2.src = 'img/s2/gallery/img_two.png';
		gallery_2_3 = new Image();
		gallery_2_3.src = 'img/s2/gallery/img_three.png';

		gallery_3_1 = new Image();
		gallery_3_1.src = 'img/s3/gallery/img_one.png';
		gallery_3_2 = new Image();
		gallery_3_2.src = 'img/s3/gallery/img_two.png';
		gallery_3_3 = new Image();
		gallery_3_3.src = 'img/s3/gallery/img_three.png';

		gallery_4_1 = new Image();
		gallery_4_1.src = 'img/s4/gallery/img_one.png';
		gallery_4_2 = new Image();
		gallery_4_2.src = 'img/s4/gallery/img_two.png';
		gallery_4_3 = new Image();
		gallery_4_3.src = 'img/s4/gallery/img_three.png';

		// Footer
		footer_1_1 = new Image();
		footer_1_1.src = 'img/s1/footer/footer_3.png';
		footer_1_2 = new Image();
		footer_1_2.src = 'img/s1/footer/footer_4.png';

		footer_2_1 = new Image();
		footer_2_1.src = 'img/s2/footer/footer_3.png';
		footer_2_2 = new Image();
		footer_2_2.src = 'img/s2/footer/footer_4.png';

		footer_3_1 = new Image();
		footer_3_1.src = 'img/s3/footer/footer_3.png';
		footer_3_2 = new Image();
		footer_3_2.src = 'img/s3/footer/footer_4.png';

		footer_4_1 = new Image();
		footer_4_1.src = 'img/s4/footer/footer.png';
		footer_4_2 = new Image();
		footer_4_2.src = 'img/s4/footer/footer_3.png';
		footer_4_3 = new Image();
		footer_4_3.src = 'img/s4/footer/footer_4.png';

		special_1 = new Image();
		special_1.src = 'img/special/footer/footer_3.png';
		special_2 = new Image();
		special_2.src = 'img/special/footer/footer_4.png';
		
	}

	//  Handle series selector
	function updateSelector(){
		$('#series_selector').removeClass().addClass($series[index] + '_selector');
	}

	// Handle series switch on the arrows controls
	// LEFT 
	$('.control_left_container').on('click', function() {
		// Turn off actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('on').addClass('off');
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
		$('#' + $series[index] + '_menu_item').removeClass('off').addClass('on');
		// Turn on actual index item
		$('#' + $series[index] + '_index_item').removeClass('off').addClass('on');
	})
	// RIGHT
	$('.control_right_container').on('click', function() {
		// Turn off actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('on').addClass('off');
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
		$('#' + $series[index] + '_menu_item').removeClass('off').addClass('on');
		// Turn on actual index item
		$('#' + $series[index] + '_index_item').removeClass('off').addClass('on');
	})
	// Hover over control arrows
	

	// Handle series switch on the menu
	$(document).on('click', '.main_display_series_menu ul li.off', function(){
		// Turn off actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('on').addClass('off');
		// Hide actual serie
		hideSerie();
		index = $(this).data('index');
		// Update selector
		//$('#series_selector').removeClass().addClass($series[index] + '_selector');
		// Show actual serie main display
		$('#' + $series[index] + '').show();
		// Show actual serie info
		$('#' + $series[index] + '_info').show();
		// Turn on actual menu item
		$('#' + $series[index] + '_menu_item').removeClass('off').addClass('on');
		//$('.control_left_container').css('background-color', $series_colors[index]);
	});
	// // Handle series switch on the index
	// $(document).on('click', '.series_index_item.off', function(){
	// 	// Turn off actual index item
	// 	$('#' + $series[index] + '_index_item').removeClass('on').addClass('off');
	// 	// Hide actual serie
	// 	hideSerie();
	// 	index = $(this).data('index');
	// 	// Update selector
	// 	$('#series_selector').removeClass().addClass($series[index] + '_selector');
	// 	// Show actual serie main display
	// 	$('#' + $series[index] + '').show();
	// 	// Show actual serie info
	// 	$('#' + $series[index] + '_info').show();
	// 	// Turn on actual index item
	// 	$('#' + $series[index] + '_index_item').removeClass('off').addClass('on');
	// 	//$('.control_left_container').css('background-color', $series_colors[index]);
	// });

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
		//$('#' + $series[index] + '_video_thumbnail').hide();
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
	// Player 2
	function onPlayerStateChange_two(e) {
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
	// Player 3
	function onPlayerStateChange_three(e) {
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




	// Animate elements -----------------------------------------------------------------
	function animate_elements_out() {
		$('#main_display_logo_zomlings').removeClass().addClass('out');
	}

	function animate_elements_in() {
		$('#main_display_logo_zomlings').removeClass().addClass('in');
	}  
	
	// Handle image switch from gallery index
	$(document).on('click', '.gallery_index_item_off', function(){
		// Remove 'on' class from gallery index item
		$('#' + $series[index] + '_gallery_index_container .gallery_index_item_on').removeClass().addClass('gallery_index_item_off')
		// Add class for clicked gallery index item
		$(this).removeClass().addClass('gallery_index_item_on');
		// Hide actual image
		$series_gallery_index[index] = $(this).data('index');
		// Get serie. Show new pic
		gallery_index = $series_gallery_index[index];
		$('#' + $series[index] + '_pic').css('background-image', $series_galleries[index][gallery_index]);

	}) 

	// Handle image switch from gallery arrows
	// Left
	$('.gallery_left_control_container').on('click', function() {
		if ( $series_gallery_index[index] == 0 ) {
			$series_gallery_index[index] = 2;
		} else {
			$series_gallery_index[index] -= 1;
		}
		// Remove 'on' class from gallery index item
		$('#' + $series[index] + '_gallery_index_container .gallery_index_item_on').removeClass().addClass('gallery_index_item_off')
		// Add class for the right gallery index item
		$('#' + $series[index] + '_gallery_index_container').find("[data-index='" + $series_gallery_index[index] + "']").removeClass().addClass('gallery_index_item_on');
		// Show new image
		gallery_index = $series_gallery_index[index];
		$('#' + $series[index] + '_pic').css('background-image', $series_galleries[index][gallery_index]);

	});
	// Right
	$('.gallery_right_control_container').on('click', function() {
		if ( $series_gallery_index[index] == 2 ) {
			$series_gallery_index[index] = 0;
		} else {
			$series_gallery_index[index] += 1;
		}
		// Remove 'on' class from gallery index item
		$('#' + $series[index] + '_gallery_index_container .gallery_index_item_on').removeClass().addClass('gallery_index_item_off')
		// Add class for the right gallery index item
		$('#' + $series[index] + '_gallery_index_container').find("[data-index='" + $series_gallery_index[index] + "']").removeClass().addClass('gallery_index_item_on');
		// Show new image
		gallery_index = $series_gallery_index[index];
		$('#' + $series[index] + '_pic').css('background-image', $series_galleries[index][gallery_index]);
	});


	// Mobile detect
	var md = new MobileDetect(window.navigator.userAgent);

	// Device
	if(md.mobile() || md.tablet()){

		$('.video_thumbnail').css('pointer-events', 'none');

	} else {

	} 

	

	

})