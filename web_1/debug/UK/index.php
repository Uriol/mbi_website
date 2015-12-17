<?php
	include('location.php');
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Magic Box Toys</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link href='../css/reset.css' rel='stylesheet'>
		<link href='../css/header/header.css' rel='stylesheet'>
		<link href='../css/header/header_tablet.css' rel='stylesheet'>
		<link href='../css/header/header_mobile.css' rel='stylesheet'>

		<link href='../css/footer/footer.css' rel='stylesheet'>
		
		<!--  General style -->
		<link href='../css/home/animations.css' rel='stylesheet'>
		<link href='../css/home/style_all.css' rel='stylesheet'>
		<link href='../css/home/phone_landscape.css' rel='stylesheet'>
		<link href='../css/home/phone_portrait.css' rel='stylesheet'>

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
							<div class='countdown_text_container'>
								<div class='countdown_text'>
									<h1>Something is coming...</h1>
								</div>
							</div>
							<div class='countdown_text_container_2'>
								<div class='countdown_text'>
									<h1>...the clock is ticking!</h1>
								</div>
							</div>
							<div class='countdown_numbers_container'>
								<div class='countdown_numbers'>
									<li id='days'></li>
									<li id='hours'></li>
									<li id='min'></li>
									<li id='seconds'></li>
								</div>
							</div>
						</ul>
					</div>
				


			</article>
			<article class='banner'>
				<div class='company_motto_container'>
					<h2>At Magic Box Toys we are creators, we build our own brands and create new trends in the collectable toy market.</h2>
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


