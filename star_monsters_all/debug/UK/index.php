<?php
	include('location.php');
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Star Monsters</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">

		<!-- Style -->
		<link href='../css/reset.css' rel='stylesheet'>
		<link href='../css/header/header.css' rel='stylesheet'>
		<link href='../css/header/header_tablet.css' rel='stylesheet'>
		<link href='../css/header/header_mobile.css' rel='stylesheet'>

		<link href='../css/home/animations.css' rel='stylesheet'>
		<link href='../css/home/style_all.css' rel='stylesheet'>
		<link href='../css/home/style_1200.css' rel='stylesheet'>
		<link href='../css/home/style_850.css' rel='stylesheet'>
		<link href='../css/home/tablets.css' rel='stylesheet'>
		<link href='../css/home/phone_landscape.css' rel='stylesheet'>
		<link href='../css/home/phone_portrait.css' rel='stylesheet'>

		<link href='css/style.css' rel='stylesheet'>

		<!-- Footer -->
		<link href='../css/footer/footer.css' rel='stylesheet'>

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
			include('header.php');
		?>

		<section class='content'>
			<!-- Start main display -->
			<section class='main_display'>
				<!-- Logo -->
				<div class='main_display_logo'>
					<div class='start' id='main_display_logo_star_monsters'></div>
				</div>

				<article class='series_main_display'>

					<!-- The Movie -->
					<div class='serie_main_display on' id='the_movie'>
						<!-- BG -->
						<div class='main_display_bg' id='the_movie_bg'></div>
						<!-- Clouds -->
						<div id='viewport'>
							<div id='world'></div>
						</div>
						<!-- Video -->
						<div class='main_display_full'>
							<div class='iframe_container' id='iframe_container_the_movie'>
								<iframe id='player_the_movie' src="https://www.youtube.com/embed/59iZ9NwKG_w?rel=0&amp;showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<!--  Video thumbnail -->
						<div class='main_display_full'>
							<div class='video_thumbnail' id='the_movie_video_thumbnail'>
								<div id='the_movie_player_icon_container' class='player_icon_container'>
									<div class='player_icon'></div>
								</div>
							</div>
						</div>

					</div>

					<!-- Series 1 -->
					<div class='serie_main_display off' id='series_one'>
						<!-- BG -->
						<div class='main_display_bg' id='series_one_bg'></div>
						<!-- Video -->
						<div class='main_display_full' id='series_one_video'>
							<div class='iframe_container' id='iframe_container_series_one'>
								<iframe id='player_series_one' src="https://www.youtube.com/embed/p5kfSIFmyK0?rel=0&amp;showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
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
						<!-- Left / Right images -->
						<div class='main_display_full'>
							<div id='left_img_main_display_s_one' class='start'></div>
						</div>
						<div class='main_display_full'>
							<div id='right_img_main_display_s_one' class='start'></div>
						</div>


					</div>

					<!-- Menu -->
					<div class='main_display_full'>
						<div class='main_display_series_menu'>
							<ul>
								<li id='the_movie_menu_item' class='main_display_menu_item on' data-index='0'>MOVIE </li>
								<li id='series_one_menu_item' class='main_display_menu_item off' data-index='1'>SERIES 1</li>
							</ul>
						</div>
					</div>


				</article>

				<!-- Series left / right controls -->
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

			<section class='info'>
				<article class='info_container'>
					<div class='text_container'>
						<h1>Star Monsters</h1>
						<p>Triangular stars fall from the sky, this is the origin of Star Monsters. Quirky and funny characters, unlike anything that you have ever seen. There are so many different Star Monsters to meet: Essential, Evolved, Rare, Ultra Rare… Each and every one is here to play! Discover them all! Star Monsters guarantee fun!</p>
					</div>

					<!-- Origen -->
					<div class='text_container margin'>
						<h1>The Origin</h1>
						<p>The star lands and takes on characteristics from the environment around it. A star can fall anywhere, which means that Star Monsters can be created with limitless possibilities... The shape of each Star Monster gives us a clue to its origin.</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/origin_uk.png' >
					</div>
					<!-- Asi son -->
					<div class='text_container margin'>
						<h1>Here They Are</h1>
						<p>The base is always a three pointed star. Each one is unique and full of colour, character and fun...</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/asison_uk.png' >
					</div>


					<!-- Familias -->
					<div class='text_container margin'>
						<h1>The Families</h1>
						<p>The place where the Star Monster is formed will influence which one of 4 Star Monsters families it will belong to:</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/familias_uk.png' >
					</div>

					<!-- Valor Estelar -->
					<div class='text_container margin'>
						<h1>Star Value</h1>
						<p>Star Value is the sum of three skills: Exploration, Power and Balance.</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/valor_estelar_uk.png' >
					</div>

					<!-- Especiales -->
					<div class='text_container margin'>
						<h1>Rares and Ultra Rares</h1>
						<p>There are also Star Monsters in exclusive silver and gold.</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/especiales.png' >
					</div>

					<!-- EVOLUCIONADOS -->
					<div class='text_container margin'>
						<h1>Evolved</h1>
						<p>Some stars fall with extra energy. After the original transformation, these Star Monsters evolve! With evolution, the Star Monster changes shape and can have new colours. Most importantly, it improves its skills and increases its value.</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/evolucionados_uk.png' >
					</div>
					
				</article>
			</section>

			<!-- Footer -->
			<?php
				include('footer.php');
			?>

		</section>

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

		<script>

			thumb_movie = new Image(640, 360);
			thumb_movie.src = "../img/thumbnails/the_movie_thumb.jpg";

			bg_s1 = new Image(2499, 610);
			bg_s1.src = "../img/s1/bg_5.png";

			s1_left = new Image(703, 353);
			s1_left.src = "../img/s1/left.png";

			s1_right = new Image(703, 353);
			s1_right.src = "../img/s1/right.png";

			thumb_s1 = new Image(640, 360);
			thumb_s1.src = "../img/thumbnails/s1_thumbnail.jpg";

		</script>


		<!-- JS -->
		<script src='../js/libraries/jquery_min.js'></script>
		<script src='../js/libraries/mobile_detect_min.js'></script>
		<script src='../js/header.js'></script>

		<script src='js/script.js'></script>
		<script src='js/script_clouds.js'></script>
		<script src='js/script_stars.js'></script>

		<script src='https://www.youtube.com/iframe_api'></script>
	</body>

</html>