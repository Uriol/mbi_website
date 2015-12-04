<?php

//$country = 'UK';
$country = 'INT';

// Make sure we are not in a fake sub folder
// If we are redirect to the correct one
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// echo $actual_link;
if ( $actual_link != 'http://localhost:8888/mbi_2/ES/index.php') {
	//echo 'different';
	header('Location: http://localhost:8888/mbi_2/ES/index.php');
}

// Redirect Based on country
if ($country == 'UK'){
	header('Location: http://localhost:8888/mbi_2/UK/index.php');
} else if ($country == 'INT') {
	header('Location: http://localhost:8888/mbi_2/INT/index.php');
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

		<header>

			<article class='menu'>
				<div id='main_menu'>
					
					<a href='index.php'>
						<div id='menu_logo'></div>
					</a>
					<div id='menu_ul_container'>
						<ul class='main_menu'>
							<li class='menu_item' id='red_item'>PRODUCTOS<span> ▼</span></li>
							<a href="company/index.php">	
								<li class='menu_item' id='green_item'>COMPAÑIA</li>
							</a>
							<a href="contacto/index.php">	
								<li class='menu_item' id='yellow_item'>CONTACTO</li>
							</a>
						</ul>
					</div>
				</div>
			</article>

			<article id='submenu' class='off'>
				<div id='submenu_products_container'>
					<a href="star_monsters/index.php">		
						<div id='submenu_product_one' class='submenu_product_start'></div>
					</a>
					<a href="zomlings/index.php">	
						<div id='submenu_product_two' class='submenu_product_start'></div>
					</a> 
				</div>
			</article>

			<div class='menu_mobile'>
				<div class='menu_top_bar_mobile'>
					<a href='index.php'>
						<div class='menu_mobile_logo'></div>
					</a>
					<div class='menu_mobile_submenu_icon off'></div>
				</div>
				<div class='submenu off'>
					<ul class='main_submenu'>
						<li class='products_li'>PRODUCTOS<span> ▼</span></li>
						<a href="star_monsters/index.php">	
							<div id='SM_submenu_mobile_logo' class='product_submenu'></div>
						</a>
						<a href="zomlings/index.php">	
							<div id='Z_submenu_mobile_logo' class='product_submenu'></div>
						</a>
						<a href="company/index.php">	
							<li id='green_item_mobile'>COMPAÑIA</li>
						</a>
						<a href="contacto/index.php">	
							<li id='yellow_item_mobile'>CONTACTO</li>
						</a>
					</ul>
				</div>
			</div>

		</header>


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
			<section class='footer'>
				<div class='social_media'>
					<div class='social_media_container'>
						<a href="https://www.facebook.com/magicboxint" target="_blank">
							<div class='social_media_icon' id='facebook_icon'></div>
						</a>

						<a href="https://twitter.com/@MagicBox_int" target="_blank">
							<div class='social_media_icon' id='twitter_icon'></div>
						</a>

						<a href="https://www.instagram.com/magicboxint.toys" target="_blank">
							<div class='social_media_icon' id='instagram_icon'></div>
						</a>

						<a href="https://www.youtube.com/channel/UC3C6tUlYvhHCapwAxyedyMg" target="_blank">
							<div class='social_media_icon' id='yt_icon'></div>
						</a>

					</div>
					<p>© MAGIC BOX TOYS</p>
				</div>
				
			</section>

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


