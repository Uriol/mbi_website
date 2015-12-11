<?php

	// Make sure we are not in a fake sub folder
	// If we are redirect to the correct one
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	// echo $actual_link;
	if ( $actual_link != 'http://test.martomagic.com/ES/index.php') {
		header('Location: http://test.martomagic.com/ES/index.php');
	}

	// Get location by ip
	include("geoip.inc"); 
	$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
	$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
	geoip_close($gi);

	// Redirect Based on country
	if ($origin == 'ES'){
		
	} else if ($origin == 'GB') {
		header('Location: http://test.martomagic.com/UK/index.php');
	} else {
		header('Location: http://test.martomagic.com/INT/index.php');
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Magic Box Toys</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link href='css/reset.css' rel='stylesheet'>
		<link href='css/header.css' rel='stylesheet'>
		<link href='css/header_tablet.css' rel='stylesheet'>
		<link href='css/header_mobile.css' rel='stylesheet'>

		<link href='css/footer.css' rel='stylesheet'>
		<link href='css/style_all.css' rel='stylesheet'>
		<link href='css/animations.css' rel='stylesheet'>

		<link href='css/phone_portrait.css' rel='stylesheet'>
		<link href='css/phone_landscape.css' rel='stylesheet'>
		<link href='css/tablets.css' rel='stylesheet'>
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style_min_2000.css' rel='stylesheet'>

	</head>

	<body>

		<div class='loading'>
		</div>

		<?php
			include('header.php');
		?>

		<section class='content'>

			<article class='home_main_display'>

				<div class='main_display_logo'>
					<div class='start' id='main_display_logo_star_monsters'></div>
				</div>

				<div id='viewport'>
					<div id='world'></div>
				</div>

				

				<div class='main_display_full'>
					<div class='iframe_container' id='iframe_container_sm_cd'>
						<iframe id='player_sm_cd' src="https://www.youtube.com/embed/PvzEqbhyN_o?rel=0&amp;showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>

				<!-- Video Thumbnail -->
				<div class='main_display_full'>
					<div class='video_thumbnail' id='star_mounster_cd_thumbnail'>
					<div id='sm_cd_player_icon_container' class='player_icon_container'>
						<div class='player_icon'></div>
					</div>
					</div>
				</div>

				<!-- Countdown -->
				<div class='main_display_full'>
					<div id='main_display_countdown' class='start'>
						<ul>
							<li id='days'></li>
							<li id='hours'></li>
							<li id='min'></li>
							<li id='seconds'></li>
						</ul>
					</div>
				</div>
				


			</article>
			<article class='banner'>
				<div class='company_motto_container'>
					<h2>En Magic Box somos creadores, construimos marcas y generamos tendencias en el sector de los juguetes coleccionables.</h2>
				</div>
			</article>

			<div class='pre_footer'>
				<div class='pre_footer_img' id='home_pre_footer'></div>
			</div>

			<!-- Footer -->
			<?php
				include('footer.php');
			?>

		</section>

		<!-- LOAD IMAGES -->
		<script>
			logo_sm = new Image(540,304)
			logo_sm.src = "img/logo_sm_submenu.png";

			logo_z = new Image(540,304);
			logo_z.src = "img/logo_z_submenu.png";
		</script>

		<script>
			(function() {
				var lastTime = 0;
				var vendors = ['ms', 'moz', 'webkit', 'o'];
				for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
					window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
					window.cancelRequestAnimationFrame = window[vendors[x]+
					  'CancelRequestAnimationFrame'];
				}

				if (!window.requestAnimationFrame)
					window.requestAnimationFrame = function(callback, element) {
						var currTime = new Date().getTime();
						var timeToCall = Math.max(0, 16 - (currTime - lastTime));
						var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
						  timeToCall);
						lastTime = currTime + timeToCall;
						return id;
					};

				if (!window.cancelAnimationFrame)
					window.cancelAnimationFrame = function(id) {
						clearTimeout(id);

				};
			}())
		</script>

		<script src='https://www.youtube.com/iframe_api'></script>
		<script src='js/libraries/jquery_min.js'></script>
		<script src='js/libraries/mobile_detect_min.js'></script>
		<script src='js/libraries/jquery.countdown.js'></script>
		<script src='js/header.js'></script>
		
		<script src='js/script_clouds.js'></script> 
		<script src='js/script_stars.js'></script> 
		<script src='js/interaction.js'></script> 

	</body>

</html>


