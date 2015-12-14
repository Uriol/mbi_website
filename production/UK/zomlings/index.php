<?php
	include('location.php');
?>




<!DOCTYPE html>
<html>
	<head>
		<title>ZOMLINGS</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link href='../../css/reset.css' rel='stylesheet'>
		<link href='../../css/header/header.css' rel='stylesheet'>
		<link href='../../css/header/header_tablet.css' rel='stylesheet'>
		<link href='../../css/header/header_mobile.css' rel='stylesheet'>

		<link href='../../css/footer/footer.css' rel='stylesheet'>

		<!--  General products -->
		<link href='../../css/products/style_1200.css' rel='stylesheet'>
		<link href='../../css/products/style.css' rel='stylesheet'>
		<link href='../../css/products/tablets.css' rel='stylesheet'>
		<link href='../../css/products/phone_landscape.css' rel='stylesheet'>
		<link href='../../css/products/phone_portrait.css' rel='stylesheet'>


		<link href='css/style_all.css' rel='stylesheet'>
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
			include('../header.php');
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


					<!--  Serie two -->
					<div class='serie_main_display off' id='series_two'>
						<!-- BG -->
						<div class='main_display_bg' id='series_two_bg'></div>
						<!-- Video -->
						<div class='main_display_full' id='series_two_video'>
							<div class='iframe_container' id='iframe_container_series_two'>
								<iframe id='player_series_two' src="https://www.youtube.com/embed/79iR2JPfoUk?rel=0&amp;showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<!--  Video thumbnail -->
						<div class='main_display_full'>
							<div class='video_thumbnail' id='series_two_video_thumbnail'>
								<div id='series_two_player_icon_container' class='player_icon_container'>
									<div class='player_icon'></div>
								</div>
							</div>
						</div>
					</div>


					<!--  Serie three -->
					<div class='serie_main_display off' id='series_three'>
						<!-- BG -->
						<div class='main_display_bg' id='series_three_bg'></div>
						<!-- Video -->
						<div class='main_display_full' id='series_three_video'>
							<div class='iframe_container' id='iframe_container_series_three'>
								<iframe id='player_series_three' src="https://www.youtube.com/embed/V0if4l8r7Uo?rel=0&amp;showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<!--  Video thumbnail -->
						<div class='main_display_full'>
							<div class='video_thumbnail' id='series_three_video_thumbnail'>
								<div id='series_three_player_icon_container' class='player_icon_container'>
									<div class='player_icon'></div>
								</div>

							</div>
						</div>
					</div>


					<!--  Serie Four -->
					<div class='serie_main_display off' id='series_four'>
						<!-- BG -->
						<div class='main_display_bg' id='series_four_bg'></div>
						<!-- Video -->
						<div class='main_display_full' id='series_four_video'>
							<div class='iframe_container' id='iframe_container_series_four'>
								<iframe id='player_series_four' src="https://www.youtube.com/embed/1GoxKV2Ess8?rel=0&amp;showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<!--  Video thumbnail -->
						<div class='main_display_full'>
							<div class='video_thumbnail' id='series_four_video_thumbnail'>
								<div id='series_four_player_icon_container' class='player_icon_container'>
									<div class='player_icon'></div>
								</div>

							</div>
						</div>
						<div class='main_display_series_signboard'>
							<div class='series_item' id='series_four_item'></div>
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
								<li id='series_two_menu_item' class='off' data-index='1'>SERIES 2<div id='series_two_selector'></div></li>
								<li id='series_three_menu_item' class='off' data-index='2'>SERIES 3<div id='series_three_selector'></div></li>
								<li id='series_four_menu_item' class='off' data-index='3'>SERIES 4<div id='series_four_selector'></div></li>
								<li id='special_menu_item' class='off' data-index='4'>SPECIAL<div id='special_selector'></div></li>
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
							<p>Zomlings are invading playgrounds everywhere! There are more than 100 cheeky, miniature monsters to collect and build into your own Zomlings Town. Explore the 7 different Zomlings neighbourhoods and discover characters like Ocotozom in Wacky Waters and Zomhog in Zomlings Zoo. There are even rare silver and gold Zomlings to discover and collect. Use your houses and towers to build your own Zomlings Town!</p>
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
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='tower_pack_image_series_one'></div>
									<div class='product_info_container'>
										<h3>Tower Pack</h3>
										<p>1 Tower + 1 Zomling + Checklist</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='house_pack_image_series_one'></div>
									<div class='product_info_container'>
										<h3>House Pack</h3>
										<p>1 House + 2 Zomlings + Checklist</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='blister_house_image_series_one'></div>
									<div class='product_info_container'>
										<h3>Blister 4</h3>
										<p>4 Zomlings + 3 Towers + 1 House</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='blister_mansion_image_series_one'>
									</div>
									<div class='product_info_container'>
										<h3>Blister 7</h3>
										<p>7 Zomlings + 4 Towers + 1 Mansion</p>
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


					<!-- Series two -->
					<div class='serie_info_container off' id='series_two_info'>
						<div class='description_container'>
							<h1>ZOMLINGS</h1>
							<p>Zomlings Town has really grown since nervous visitors arrived to explore the streets for the first time. Look at Zomlings Town now and you will quickly discover brand new Towers and Houses and of course, a lot of exciting new Zomlings! The Crystal Towers and Houses add a splash of colour and a little sparkle to the surroundings. Spooky Street, Creepy Circus, Haunted Hotel....every neighbourhood has grown and improved.</p>
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
								<div class='gallery_image' id='series_two_pic'></div>
							</div>
							<div class='gallery_index_container' id='series_two_gallery_index_container'>
								<div class='gallery_index_item_on' data-index='0'></div>
								<div class='gallery_index_item_off' data-index='1'></div>
								<div class='gallery_index_item_off' data-index='2'></div>
							</div>
						</div>
						<!-- Products series two -->
						<div class='products_container'>
							<div class='products_box'>
								<h1>PRODUCTS</h1>
								<div class='product_container'>
									<div class='product_image_container' id='one_pack_image_series_two'></div>
									<div class='product_info_container'>
										<h3>One Pack</h3>
										<p>1 Zomling + Checklist</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='tower_pack_image_series_two'></div>
									<div class='product_info_container'>
										<h3>Tower Pack</h3>
										<p>1 tower + 1 Zomling + Checklist</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='house_pack_image_series_two'></div>
									<div class='product_info_container'>
										<h3>House Pack</h3>
										<p>1 House + 2 Zomlings + Checklist</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='blister_house_image_series_two'></div>
									<div class='product_info_container'>
										<h3>Blister 4</h3>
										<p>4 Zomlings + 3 Towers + 1 Casa</p>
									</div>
								</div>
							</div>
						</div>
						<!--  Series two prefooter -->
						<div class='pre_footer'>
							<div class='pre_footer_img' id='series_two_pre_footer'></div>
						</div>
					</div>

					<!--  Series three  -->
					<div class='serie_info_container off' id='series_three_info'>
						<div class='description_container'>
							<h1>ZOMLINGS</h1>
							<p>Welcome back to Zomlings Town! There are so many new things to tell you about! Things never stand still in this town and the new Ghost Trains mean that the Zomlings are busier and more active than ever. Board the train and take a tour of the Town. Discover more than 100 new characters and new Zomlings Houses that are bigger than ever before!</p>
						</div>
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
								<div class='gallery_image' id='series_three_pic'></div>
							</div>
							<div class='gallery_index_container' id='series_three_gallery_index_container'>
								<div class='gallery_index_item_on' data-index='0'></div>
								<div class='gallery_index_item_off' data-index='1'></div>
								<div class='gallery_index_item_off' data-index='2'></div>
							</div>
						</div>
						<!-- Products series three -->
						<div class='products_container'>
							<div class='products_box'>
								<h1>PRODUCTS</h1>
								<div class='product_container'>
									<div class='product_image_container' id='one_pack_image_series_three'></div>
									<div class='product_info_container'>
										<h3>One Pack</h3>
										<p>1 Zomling + Checklist</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='train_pack_image_series_three'></div>
									<div class='product_info_container'>
										<h3>Train Pack</h3>
										<p>1 Train/Wagon + 1 Zomling + Checklist</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='house_pack_image_series_three'></div>
									<div class='product_info_container'>
										<h3>House Pack</h3>
										<p>1 House + 2 Zomlings + Checklist</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='blister_image_series_three'></div>
									<div class='product_info_container'>
										<h3>Blister 4</h3>
										<p>4 Zomlings + 3 Wagons + 1 Train</p>
									</div>
								</div>
							</div>
						</div>
						<!--  Series one prefooter -->
						<div class='pre_footer'>
							<div class='pre_footer_img' id='series_three_pre_footer'></div>
						</div>
					</div>

					<!--  Series four -->
					<div class='serie_info_container off' id='series_four_info'>
						<div class='description_container'>
							<h1>ZOMLINGS</h1>
							<p>Zomlings Town is evolving once again! Series 4 arrives with more than 100 new Zomlings to meet. Best of all, the new Zomlings come in awesome Crystal colours! It’s not just new colours that these Zomlings have brought to Zomlings Town... check out the new Zom-Mobiles! A car, a scooter, a truck and even a plane!'</p>
						</div>
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
								<div class='gallery_image' id='series_four_pic'></div>
							</div>
							<div class='gallery_index_container' id='series_four_gallery_index_container'>
								<div class='gallery_index_item_on' data-index='0'></div>
								<div class='gallery_index_item_off' data-index='1'></div>
								<div class='gallery_index_item_off' data-index='2'></div>
							</div>
						</div>
						<div class='products_container'>
							<div class='products_box'>
								<h1>PRODUCTS</h1>
								<div class='product_container'>
									<div class='product_image_container' id='one_pack_image_series_four'></div>
									<div class='product_info_container'>
										<h3>One Pack</h3>
										<p>1 Zomling + Checklist</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='vehicle_pack_image_series_four'></div>
									<div class='product_info_container'>
										<h3>Vehicle Pack</h3>
										<p>1 Zom-Mobile + 1 Zomling + Checklist</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='bus_pack_image_series_four'></div>
									<div class='product_info_container'>
										<h3>Bus Pack</h3>
										<p>1 Bus + 2 Zomlings + Checklist</p>
									</div>
								</div>
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='blister_image_series_four'></div>
									<div class='product_info_container'>
										<h3>Blister 4</h3>
										<p>4 Zomlings + 4 Zom-Mobiles</p>
									</div>
								</div>
							</div>
						</div>
						<div class='pre_footer'>
							<div class='pre_footer_img' id='series_four_pre_footer'></div>
						</div>
					</div>

					<!--  Special -->
					<div class='serie_info_container off' id='special_info'>
						<div class='description_container'>
							<h1>ZOMLINGS</h1>
							<p>There are some special Zomlings that are not always found around Zomlings Town. Adventure Zomlings are intrepid explorers who are always off discovering new places. Two exclusive Zomlings can also be found hiding in our Magic Trick Hotels! Discover them all!</p>
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
								<div class='product_filet'></div>
								<div class='product_container'>
									<div class='product_image_container' id='hotel_2_image'></div>
									<div class='product_info_container'>
										<h3>Hotel Pack 2</h3>
										<p>1 Hotel + 2 Zomlings</p>
									</div>
								</div>
								<div class='product_filet'></div>
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