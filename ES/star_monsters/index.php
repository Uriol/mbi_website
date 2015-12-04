<?php

	//$country = 'UK';
	$country = 'ES';
	
	//header('Location: ../UK/index.php');
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	// echo $actual_link;
	if ( $actual_link != 'http://localhost:8888/mbi_2/ES/star_monsters/index.php') {
		//echo 'different';
		header('Location: http://localhost:8888/mbi_2/ES/star_monsters/index.php');
	}

	// Redirect Based on country
	if ($country == 'UK'){
		header('Location: http://localhost:8888/mbi_2/UK/star_monsters/index.php');
	} else if ($country == 'INT') {
		header('Location: http://localhost:8888/mbi_2/INT/star_monsters/index.php');
	}


?>




<!DOCTYPE html>
<html>
	<head>
		<title>STAR MONSTERS</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link href='../css/reset.css' rel='stylesheet'>
		<link href='../css/header.css' rel='stylesheet'>
		<link href='../css/header_tablet.css' rel='stylesheet'>
		<link href='../css/header_mobile.css' rel='stylesheet'>

		<link href='../css/footer.css' rel='stylesheet'>

		<link href='css/style_all.css' rel='stylesheet'>
		<link href='css/animations.css' rel='stylesheet'>

		<link href='css/phone_portrait.css' rel='stylesheet'>
		<link href='css/phone_landscape.css' rel='stylesheet'>
		<link href='css/tablets.css' rel='stylesheet'>
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style_min_1200.css' rel='stylesheet'>
	</head>

	<body>

		<div class='loading'>
		</div>

		<header>
			<!-- Menu desktop  -->
			<article class='menu'>
				<div id='main_menu'>
					<a href='../index.php'>
						<div id='menu_logo'></div>
					</a>
					<div id='menu_ul_container'>
						<ul class='main_menu'>
							<li class='menu_item' id='red_item'>PRODUCTOS<span> ▼</span></li>
							<a href="../company/index.php">	
								<li class='menu_item' id='green_item'>COMPAÑIA</li>
							</a>
							<a href="../contacto/index.php">	
								<li class='menu_item' id='yellow_item'>CONTACTO</li>
							</a>
						</ul>
					</div>
				</div>
			</article>
			<article id='submenu' class='off'>
				<div id='submenu_products_container'>
					<a href="index.php">	
						<div id='submenu_product_one' class='submenu_product_start'></div>
					</a>
					<a href="../zomlings/index.php">	
						<div id='submenu_product_two' class='submenu_product_start'></div>
					</a> 
				</div>
			</article>
			<!-- Menu mobile -->
			<div class='menu_mobile'>
				<div class='menu_top_bar_mobile'>
					<a href='../index.php'>
						<div class='menu_mobile_logo'></div>
					</a>
					<div class='menu_mobile_submenu_icon off'></div>
				</div>
				<div class='submenu off'>
					<ul class='main_submenu'>
						<li class='products_li'>PRODUCTOS<span> ▼</span></li>
						<a href="index.php">
							<div id='SM_submenu_mobile_logo' class='product_submenu'></div>
						</a>
						<a href="..zomlings/index.php">	
							<div id='Z_submenu_mobile_logo' class='product_submenu'></div>
						</a>
						<a href="../company/index.php">	
							<li id='green_item_mobile'>COMPAÑIA</li>
						</a>
						<a href="../contacto/index.php">
							<li id='yellow_item_mobile'>CONTACTO</li>
						</a>
					</ul>
				</div>
			</div>
		</header>


		<section class='content'>
			<!-- Start main display -->
			<section class='main_display'>

				<div class='main_display_logo'>
					<div class='start' id='main_display_logo_star_monsters'></div>
				</div>

				<article class='series_main_display'>

					<!--  Serie One  -->
					<div class='serie_main_display on' id='series_one'>
						<!-- BG -->
						<div class='main_display_bg' id='series_one_bg'></div>
						<div class='main_display_full' id='series_one_video'>
							<div class='iframe_container' id='iframe_container_series_one'>
								<iframe id='player_series_one' src="https://www.youtube.com/embed/PvzEqbhyN_o?rel=0&amp;showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<!--  Video thumbnail -->
						<div class='main_display_full'>
							<div class='video_thumbnail' id='series_one_video_thumbnail'>
								<div id='series_one_player_icon_container' class='player_icon_container'>
									<div class='player_icon'></div>
								</div>
							</div>
						</div>

						<div class='main_display_full'>
							<div id='left_img_main_display_s_one' class='start'></div>
						</div>
						<div class='main_display_full'>
							<div id='right_img_main_display_s_one' class='start'></div>
						</div>

					</div>


					<!-- Special -->
					<div class='serie_main_display off' id='special'>
						<!-- BG -->
						<div class='main_display_bg' id='special_bg'></div>

					</div>

					<!--  Menu -->
					<div class='main_display_full'>
						<div class='main_display_series_menu'>
							<ul>
								<li id='series_one_menu_item' class='on' data-index='0'>SERIES 1<div id='series_one_selector'></div></li>
								<li id='special_menu_item' class='off' data-index='1'>SPECIAL<div id='special_selector'></div></li>
							</ul>
						</div>
					</div>


				</article>


				<!--  Series left/right controls -->
				<div class='main_display_series_controls'>
					<div class='control_left_container' >
						<div class='control_arrow' id='left_arrow'></div>
					</div>
				</div> 
				<div class='main_display_series_controls'>
					<div class='control_right_container'>
						<div class='control_arrow' id='right_arrow'></div>
					</div>
				</div>


			</section>

			<section class='series_info'>
				<!-- Series One Info -->
					<div class='serie_info_container on' id='series_one_info'>
						<div class='description_container'>
							<h1>STAR MONSTERS</h1>
							<p>Caen del cielo estrellas con forma de triángulo... Es el origen de los Star Monsters, unos curiosos y divertidos personajes diferentes a todo. Hay Star Monsters de cuatro familias distintas, en blanco, de colores, Evolucionados, Raros, Ultra Raros... ¡y todos han venido a jugar! Descúbrelos, llévatelos contigo y entrénalos para competir en los juegos que aparecen en esta guía. ¡La diversión está asegurada!</p>
						</div>
						<!-- Gallery series one -->
						<div class='gallery_container'>
							<div class='gallery_controls'>
								<div class='gallery_left_control_container'>
									<div class='gallery_control_arrow' id='gallery_left_arrow'></div>
								</div>
							</div>
							<div class='gallery_controls'>
								<div class='gallery_right_control_container'>
									<div class='gallery_control_arrow' id='gallery_right_arrow'></div>
								</div>
							</div>
							<div class='gallery_pictures'>
								<div class='gallery_image' id='series_one_pic'></div>
							</div>
							<div class='gallery_index_container' id='series_one_gallery_index_container'>
								<div class='gallery_index_item_on' data-index='0'></div>
								<div class='gallery_index_item_off' data-index='1'></div>
								<div class='gallery_index_item_off' data-index='2'></div>
							</div>
						</div>
						<!-- Products series one -->
						<div class='products_container'>
							<div class='products_box'>
								<h1>PRODUCTS</h1>
								<div class='product_container'>
									<div class='product_image_container' id='one_pack_image_series_one'></div>
									<div class='product_info_container'>
										<h3>One Pack</h3>
										<p>1 Zomling + Checklist</p>
									</div>
								</div>
								<div class='product_container'>
									<div class='product_image_container' id='tower_pack_image_series_one'></div>
									<div class='product_info_container'>
										<h3>Tower Pack</h3>
										<p>1 House + 2 Zomlings + Checklist</p>
									</div>
								</div>
								<div class='product_container'>
									<div class='product_image_container' id='house_pack_image_series_one'></div>
									<div class='product_info_container'>
										<h3>One Pack</h3>
										<p>1 Zomling + Checklist</p>
									</div>
								</div>
								<div class='product_container'>
									<div class='product_image_container' id='house_pack_image_series_one_2'></div>
									<div class='product_info_container'>
										<h3>One Pack</h3>
										<p>1 Zomling + Checklist</p>
									</div>
								</div>
								<div class='product_container'>
									<div class='product_image_container' id='house_pack_image_series_one_3'>
									</div>
									<div class='product_info_container'>
										<h3>One Pack</h3>
										<p>1 Zomling + Checklist</p>
									</div>
								</div>
							</div>
						</div>
						<!--  Series one prefooter -->
						<div class='pre_footer'>
							<div class='pre_footer_img' id='series_one_pre_footer'></div>
						</div>
					</div>



			</section>

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

		<script>
			logo_sm = new Image(540, 285)
			logo_sm.src = "img/logo_sm.png";

			bg_s1 = new Image(2499, 610);
			bg_s1.src = "img/s1/bg.png";

			left_s1 = new Image(703, 353);
			left_s1.src = "img/s1/left.png";

			right_s1 = new Image(703, 353);
			right_s1.src = "img/s1/right.png";

			logo_sm = new Image(540,304)
			logo_sm.src = "../img/logo_sm_submenu.png";

			logo_z = new Image(540,304);
			logo_z.src = "../img/logo_z_submenu.png";


		</script>


		<script src='https://www.youtube.com/iframe_api'></script>
		<script src='../js/libraries/jquery_min.js'></script>
		<script src='../js/libraries/mobile_detect_min.js'></script>
		<script src='../js/header.js'></script>
		<script src='js/script.js'></script>

	</body>
</html>