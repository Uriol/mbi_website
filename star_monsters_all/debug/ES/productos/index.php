<?php
	include('location.php');
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Star Monsters - Productos</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
		
		<link href='../../css/reset.css' rel='stylesheet'>

		<!-- Style -->
		<link href='../../css/reset.css' rel='stylesheet'>
		<link href='../../css/header/header.css' rel='stylesheet'>
		<link href='../../css/header/header_tablet.css' rel='stylesheet'>
		<link href='../../css/header/header_mobile.css' rel='stylesheet'>

		<link href='../../css/products/style_all.css' rel='stylesheet'>
		<link href='../../css/products/style_1200.css' rel='stylesheet'>
		<link href='../../css/products/style_850.css' rel='stylesheet'>
		<link href='../../css/products/tablets.css' rel='stylesheet'>
		<link href='../../css/products/phone_landscape.css' rel='stylesheet'>
		<link href='../../css/products/phone_portrait.css' rel='stylesheet'>
		<link href='../../css/products/animations.css' rel='stylesheet'>

		<link href='css/style.css' rel='stylesheet'>

		<!-- Footer -->
		<link href='../../css/footer/footer.css' rel='stylesheet'>


	</head>

	<body>

		<div class='loading'>
		</div>

		<style>
			.loading {
				width: 100%;
				height: 100%;
				background-color: white;
				position: absolute;
				position:fixed;
				z-index: 9999;
				overflow-y: hidden;
			}
		</style>

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
							<h1>Star Monsters</h1>
							<p>Caen del cielo estrellas con forma de triángulo, es el origin de los Star Monsters, unos curiosos y divertidos personajes diferentes a todo. Hay Star Monsters de cuatro familias distintas, en blanco, de colores, Evolucionados, Raros, Ultra Raros... ¡y todos han venido a jugar! Descúbrelos, llévatelos contigo y entrénalos para competir. ¡La diversión está asegurada!</p>
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
										<h3>Two Pack</h3>
										<p>2 Star Monsters + 2 Stickers</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='mini_capsules_image_series_one'></div>
									<div class='product_info_container'>
										<h3>Mini Capsule</h3>
										<p>2 Mini Capsules + 2 Star Monsters + 2 Stickers</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='capsule_image_series_one'></div>
									<div class='product_info_container'>
										<h3>Capsule</h3>
										<p>1 Capsule + 1 Essential Star Monster + 1 Evolution Star Monster</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='bag_image_series_one'></div>
									<div class='product_info_container'>
										<h3>Bag Pack</h3>
										<p>1 Bag + 3 Star Monsters</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='blister_image_series_one'>
									</div>
									<div class='product_info_container'>
										<h3>Blister</h3>
										<p>2 Regular Star Monsters + 1 Essential + 1 Evolution + 1 Silver/Gold + 1 Silver/Gold Mini Capsule</p>
									</div>
								</div>
							</div>
						</div>
						
					</div>


					<!-- Special Info -->
					<div class='serie_info_container off' id='special_info'>
						<div class='description_container'>
							<h1>Star Monsters</h1>
							<p>Algunas veces dos estrellas chocan en el aire antes de caer al suelo. Cuando eso pasa, dos energías diferentes se fusionan y el resultado final es un increíble Star Monster Fusion. Los reconocerás porque sus bases tienen un color distinto además de tener un alto valor estelar. ¡No te los pierdas!</p>
						</div>

						<!-- Products special -->
						<div class='products_container'>
							<div class='products_box'>
								<h1>Productos</h1>
								<div class='product_container'>
									<div class='product_image_container' id='tin_special'></div>
									<div class='product_info_container'>
										<h3>Collector Tin</h3>
										<p>8 Fusion Star Monsters</p>
									</div>
								</div>
								<div class='product_filet'></div>
							</div>
						</div>

					</div>


			</section>

			<!-- Footer -->
			<?php
				include('../footer.php');
			?>

		</section>

		<script>

			bg_s1 = new Image(2499, 610);
			bg_s1.src = "../../img/s1/bg_5.png";

			s1_left = new Image(703, 353);
			s1_left.src = "../../img/s1/left.png";

			s1_right = new Image(703, 353);
			s1_right.src = "../../img/s1/right.png";

			thumb_s1 = new Image(640, 360);
			thumb_s1.src = "../../img/thumbnails/s1_thumbnail.jpg";

			bg_special = new Image();
			bg_special.src = "../../img/products/special/bg_special_4.png";

		</script>


		<!-- JS -->
		<script src='../../js/libraries/jquery_min.js'></script>
		<script src='../../js/libraries/mobile_detect_min.js'></script>
		<script src='../../js/header.js'></script>
		<script src='../../js/products/script.js'></script>

		<script src='https://www.youtube.com/iframe_api'></script>

	</body>

</html>