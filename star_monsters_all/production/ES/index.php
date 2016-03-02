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

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-18320013-14', 'auto');
		  ga('send', 'pageview');

		</script>

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
								<li id='the_movie_menu_item' class='main_display_menu_item on' data-index='0'>PELÍCULA</li>
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
						<p>Caen del cielo estrellas con forma de triángulo, es el origen de los Star Monsters, unos curiosos y divertidos personajes diferentes a todo. Hay Star Monsters de cuatro familias distintas, en blanco, de colores, Evolucionados, Raros, Ultra Raros... ¡y todos han venido a jugar! Descúbrelos, llévatelos contigo y entrénalos para competir. ¡La diversión está asegurada!</p>
					</div>

					<!-- Origen -->
					<div class='text_container margin'>
						<h1>El Origen</h1>
						<p>Con la energía de una estrella y las propiedades del lugar donde cae surge un Star Monster. La estrella puede caer en cualquier parte, por lo que los Star Monsters tienen orígenes muy diversos. La forma de cada
Star Monster nos da pistas sobre su origen.</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/origin.png' >
					</div>
					<!-- Asi son -->
					<div class='text_container margin'>
						<h1>Así son</h1>
						<p>Su base es siempre una estrella de tres puntas, con forma de triángulo. Los Star Monsters son todos diferentes, llenos de color, originales, divertidos... ¡Son únicos!</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/asison.png' >
					</div>


					<!-- Familias -->
					<div class='text_container margin'>
						<h1>Las Familias</h1>
						<p>Según donde cae su estrella, cada Star Monster pertenece a una de estas cuatro familias:</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/familias.png' >
					</div>

					<!-- Valor Estelar -->
					<div class='text_container margin'>
						<h1>Valor Estelar</h1>
						<p>El valor estelar es la suma de tres valores: Exploración, Power y Balance.</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/valor_estelar.png' >
					</div>

					<!-- Especiales -->
					<div class='text_container margin'>
						<h1>Especiales</h1>
						<p>También hay Star Monsters especiales, en los exclusivos colores PLATA y ORO.</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/especiales.png' >
					</div>

					<!-- EVOLUCIONADOS -->
					<div class='text_container margin'>
						<h1>Evolucionados</h1>
						<p>Algunas estrellas caen con un extra de energía. En esos casos, tras la transformación original y los colores, ¡el Star Monster evoluciona! Con la evolución cambia la forma del Star Monster y puede haber nuevos colores pero sobretodo, mejora sus habilidades y aumenta su valor.</p>
					</div>
					<div class='story_image'>
						<img src='../img/home/story/evolucionados.png' >
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