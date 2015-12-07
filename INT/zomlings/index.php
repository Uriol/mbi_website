<?php

	//$country = 'UK';
	$country = 'INT';
	
	//header('Location: ../UK/index.php');
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	// echo $actual_link;
	if ( $actual_link != 'http://localhost:8888/mbi_2/INT/zomlings/index.php') {
		//echo 'different';
		header('Location: http://localhost:8888/mbi_2/INT/zomlings/index.php');
	}

	// Redirect Based on country
	if ($country == 'ES'){
		header('Location: http://localhost:8888/mbi_2/ES/zomlings/index.php');
	} else if ($country == 'UK') {
		header('Location: http://localhost:8888/mbi_2/UK/zomlings/index.php');;
	}


?>





<!DOCTYPE html>
<html>
	<head>
		<title>ZOMLINGS</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link href='../css/reset.css' rel='stylesheet'>
		<link href='../css/header.css' rel='stylesheet'>
		<link href='../css/header_tablet.css' rel='stylesheet'>
		<link href='../css/header_mobile.css' rel='stylesheet'>

		<link href='../css/footer.css' rel='stylesheet'>

		<link href='css/style_all.css' rel='stylesheet'>
		<!-- <link href='css/style_max_319.css' rel='stylesheet'> -->
		<link href='css/phone_portrait.css' rel='stylesheet'>
		<link href='css/phone_landscape.css' rel='stylesheet'>
		<link href='css/tablets.css' rel='stylesheet'>
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style_min_1080.css' rel='stylesheet'>
		<link href='css/animations.css' rel='stylesheet'>

	</head>

	<body>
		<div class='loading'>
		</div>

		<?php
		include('../header.php')
		?>
			
		<section class='content'>
			<section class='main_display'>
				<div class='main_display_logo'>
					<div class='start' id='main_display_logo_zomlings'></div>
				</div>
				<article class='series_main_display'>
					
					<!--  Serie One -->
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
					</div>


					<!--  Special -->
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
							<h1>ZOMLINGS</h1>
							<p>¡Los Zomlings han llegado y están por todas partes! Hay más de 100 figuras para coleccionar, incluyendo figuras especiales doradas y plateadas. Explora los 7 vecindarios Zomlings y descubre personajes como Octozom de Wacky Waters y Zomhog de Zomlings Zoo. Puedes encontrar casas, torres y mansiones de muchos colores. Juega con tuscasas, apila las torres y ¡crea tu propia Zomlings Town!</p>
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
										<p>1 Torre + 1 Zomling + Checklist</p>
									</div>
								</div>
								<div class='product_container'>
									<div class='product_image_container' id='house_pack_image_series_one'></div>
									<div class='product_info_container'>
										<h3>House Pack</h3>
										<p>1 casa + 2 Zomlings + Checklist</p>
									</div>
								</div>
								<div class='product_container'>
									<div class='product_image_container' id='blister_house_image_series_one'></div>
									<div class='product_info_container'>
										<h3>Blister 4</h3>
										<p>4 Zomlings + 3 Torres + 1 Casa</p>
									</div>
								</div>
								<div class='product_container'>
									<div class='product_image_container' id='blister_mansion_image_series_one'>
									</div>
									<div class='product_info_container'>
										<h3>Blister 7</h3>
										<p>7 Zomlings + 4 Torres + 1 Mansión</p>
									</div>
								</div>
							</div>
						</div>
						<!--  Series one prefooter -->
						<div class='pre_footer'>
							<div class='pre_footer_img' id='series_one_pre_footer'></div>
						</div>
					</div>
					<!-- End series one -->

					<!--  Special -->
					<div class='serie_info_container off' id='special_info'>
						<div class='description_container'>
							<h1>ZOMLINGS</h1>
							<p>Hay zomlings de ediciones especiales que no se dejan ver tan fácilmente por Zomlings Town. Los Zomlings Adventure son intrépidos exploradores de nuevos lugares, por lo que siempre están de viaje. También tienes los exclusivos zomlings del Magic Trick Hotel, a quienes podrás sacar de su escondite con un divertido truco de magia. ¡Descúbrelos todos!</p>
						</div>
						<div class='products_container'>
							<div class='products_box'>
								<h1>PRODUCTS</h1>
								<div class='product_container'>
									<div class='product_image_container' id='hotel_1_image'></div>
									<div class='product_info_container'>
										<h3>Hotel Pack 1</h3>
										<p>1 Hotel + 2 Zomlings</p>
									</div>
								</div>
								<div class='product_container'>
									<div class='product_image_container' id='hotel_2_image'></div>
									<div class='product_info_container'>
										<h3>Hotel Pack 2</h3>
										<p>1 Hotel + 2 Zomlings</p>
									</div>
								</div>
								<div class='product_container'>
									<div class='product_image_container' id='tin_image_z'></div>
									<div class='product_info_container'>
										<h3>Collector Tin</h3>
										<p>5 Adventure Zomlings</p>
									</div>
								</div>
							</div>
						</div>
						<div class='pre_footer'>
							<div class='pre_footer_img' id='special_pre_footer'></div>
						</div>
					</div>

			</section>
			<!-- End series info -->

			<!-- Footer -->
			<?php
			include('../footer.php');
			?>	

		</section>

		<!--  Load images  -->
		<script>
			series_one_bg = new Image(2500,611)
			series_one_bg.src = "img/s1/bg.png";

			series_two_bg = new Image(2500,611)
			series_two_bg.src = "img/s2/bg.png";

			series_three_bg = new Image(2500,611)
			series_three_bg.src = "img/s3/bg.png";

			series_four_bg = new Image(2500,611)
			series_four_bg.src = "img/s4/bg.png";

			special_bg = new Image(2000,611)
			special_bg.src = "img/special/bg_4.png";

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