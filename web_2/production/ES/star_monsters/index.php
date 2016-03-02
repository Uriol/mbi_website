<?php
	include('location.php');
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Star Monsters</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<link href='../../css/reset.css' rel='stylesheet'>
		<link href='../../css/header/header.css' rel='stylesheet'>
		<link href='../../css/header/header_ES.css' rel='stylesheet'>
		<link href='../../css/header/header_tablet.css' rel='stylesheet'>
		<link href='../../css/header/header_mobile.css' rel='stylesheet'>

		<link href='../../css/footer/footer.css' rel='stylesheet'>

		<!--  General products  -->
		<link href='../../css/products/style_1200.css' rel='stylesheet'>
		<link href='../../css/products/style.css' rel='stylesheet'>
		<link href='../../css/products/tablets.css' rel='stylesheet'>
		<link href='../../css/products/phone_landscape.css' rel='stylesheet'>
		<link href='../../css/products/phone_portrait.css' rel='stylesheet'>


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

		<?php
			include('../header.php');
		?>


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
								<iframe id='player_series_one' src="https://www.youtube.com/embed/eU3ffZXhgCA?rel=0&amp;showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
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
								<li id='special_menu_item' class='off' data-index='1'>ESPECIAL<div id='special_selector'></div></li>
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
							<h1>Star Monsters</h1>
							<a href='http://www.starmonsters.net' target="_blank" class='s1_minisite'>www.starmonsters.net</a>
							<p>Caen del cielo estrellas con forma de triángulo, es el origen de los Star Monsters, unos curiosos y divertidos personajes diferentes a todo. Hay Star Monsters de cuatro familias distintas, en blanco, de colores, Evolucionados, Raros, Ultra Raros... ¡y todos han venido a jugar! Descúbrelos, llévatelos contigo y entrénalos para competir. ¡La diversión está asegurada!</p>
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
								<h1>Productos</h1>
								<div class='product_container'>
									<div class='product_image_container' id='packet_image_series_one'></div>
									<div class='product_info_container'>
										<h3>Sobre</h3>
										<p>2 Star Monsters + 2 Pegatinas</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='mini_capsules_image_series_one'></div>
									<div class='product_info_container'>
										<h3>Mini Cápsula</h3>
										<p>2 Mini Cápsulas + 2 Star Monsters + 2 Pegatinas</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='capsule_image_series_one'></div>
									<div class='product_info_container'>
										<h3>Cápsula</h3>
										<p>1 Cápsula + 1 Star Monster Esencial + 1 Star Monster Evolucionado</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='bag_image_series_one'></div>
									<div class='product_info_container'>
										<h3>Bolsa</h3>
										<p>1 Bolsa + 3 Star Monsters</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='blister_image_series_one'>
									</div>
									<div class='product_info_container'>
										<h3>Blíster</h3>
										<p>2 Star Monsters + 1 Esencial + 1 Evolucionado + 1 Plateado/Dorado + 1 Mini Cápsula Plateada/Dorada</p>
									</div>
								</div>
							</div>
						</div>
						<!--  Series one prefooter -->
						<div class='pre_footer'>
							<div class='pre_footer_img' id='series_one_pre_footer'></div>
						</div>
					</div>


					<!-- Special Info -->
					<div class='serie_info_container off' id='special_info'>
						<div class='description_container'>
							<h1>Star Monsters</h1>
							<a href='http://www.starmonsters.net' target="_blank" class='special_minisite'>www.starmonsters.net</a>
							<p>Algunas veces dos estrellas chocan en el aire antes de caer al suelo. Cuando eso pasa, dos energías diferentes se fusionan y el resultado final es un increíble Star Monster Fusión. Los reconocerás porque sus bases tienen un color distinto además de tener un alto valor estelar. ¡No te los pierdas!</p>
						</div>

						<!-- Products special -->
						<div class='products_container'>
							<div class='products_box'>
								<h1>Productos</h1>
								<div class='product_container'>
									<div class='product_image_container' id='tin_special'></div>
									<div class='product_info_container'>
										<h3>Lata Fusión</h3>
										<p>8 Star Monsters Fusión</p>
									</div>
								</div>
								<div class='product_filet'></div>
							</div>
						</div>

						<!--  Special prefooter -->
						<div class='pre_footer'>
							<div class='pre_footer_img' id='special_pre_footer'></div>
						</div>

					</div>


			</section>

			<!-- Footer -->
			<?php
				include('../footer.php');
			?>

		</section>

		<script>
			logo_sm_display = new Image(540, 285)
			logo_sm_display.src = "img/logo_sm.png";

			bg_s1 = new Image(2499, 610);
			bg_s1.src = "img/s1/bg_5.png";

			bg_special = new Image(2499, 610);
			bg_special.src = "img/special/bg_special_4.png";

			left_s1 = new Image(703, 353);
			left_s1.src = "img/s1/left.png";

			right_s1 = new Image(703, 353);
			right_s1.src = "img/s1/right.png";

			logo_sm = new Image(540,304)
			logo_sm.src = "../../img/all/logo_sm_submenu.png";

			logo_sm_2 = new Image(540,235)
			logo_sm_2.src = "../../img/all/logo_sm_submenu_small.png"

			logo_z = new Image(540,304);
			logo_z.src = "../../img/all/logo_z_submenu.png";

			logo_z_2 = new Image(540,235);
			logo_z_2.src = "../../img/all/logo_z_submenu_small.png";


		</script>


		<script src='https://www.youtube.com/iframe_api'></script>
		<script src='../js/libraries/jquery_min.js'></script>
		<script src='../js/libraries/mobile_detect_min.js'></script>
		<script src='../js/header.js'></script>
		<script src='js/script.js'></script>

	</body>
</html>