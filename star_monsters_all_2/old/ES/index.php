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
			<!-- Clouds -->
			<div id='viewport'>
				<div id='world'></div>
			</div>

			<div class='main_display'>
				<div class='logo_container'>
					<div class='start' id='main_display_logo_sm'></div>
				</div>
				<!-- Movie -->
				<div class='movie_container'>
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
			<div class='history_container'>
				<div class='history_text_full'>
					<div class='history_text_container'>
						<h1>Caen del cielo estrellas con forma de triángulo... Es el origen de los Star Monsters, unos curiosos y divertidos personajes diferentes a todo. Descúbrelos, llévatelos contigo y entrénalos para competir. ¡La diversión está asegurada!</h1>
					</div>
				</div>
				<div class='history_image_container'>
					<img class='first' src='../img/history/history_1.png'>
				</div>
				<div class='history_image_container'>
					<img src='../img/history/history_2.png'>
				</div>
				<div class='history_image_container'>
					<img src='../img/history/history_3.png'>
				</div>
				<div class='history_image_container'>
					<img src='../img/history/history_4.png'>
				</div>
				<div class='history_image_container'>
					<img src='../img/history/history_5.png'>
				</div>
			</div>

			<div class='pre_footer_2'></div>
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