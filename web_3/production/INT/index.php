<?php
	include('location.php')
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Magic Box Toys</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<link href='../css/reset.css' rel='stylesheet'>
		<link href='../css/header/header.css' rel='stylesheet'>
		<link href='../css/header/header_tablet.css' rel='stylesheet'>
		<link href='../css/header/header_mobile.css' rel='stylesheet'>

		<link href='../css/footer/footer.css' rel='stylesheet'>
		
		<!--  General style -->
		<link href='../css/home/animations.css' rel='stylesheet'>
		<link href='../css/home/style_all.css' rel='stylesheet'>
		<link href='../css/home/style.css' rel='stylesheet'>
		<link href='../css/home/tablets.css' rel='stylesheet'>
		<link href='../css/home/phone_landscape.css' rel='stylesheet'>
		<link href='../css/home/phone_portrait.css' rel='stylesheet'>
		<link href='../css/home/style_en.css' rel='stylesheet'>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-18320013-2', 'www.magicboxint.com');
			ga('send', 'pageview');

		</script>

	</head>

	<body>

		<div class='loading'>
		</div>

		<?php
		include('header.php')
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
						<iframe id='player_sm_cd' src="https://www.youtube.com/embed/59iZ9NwKG_w?rel=0&amp;showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
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

				<!-- Pelicula completa -->
				<div class='main_display_full'>
					<div id='main_display_title' class='start'>
						<h1>FULL MOVIE</h1>
					</div>
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

			<?php
			include('footer.php');
			?>	

		</section>

		<!-- LOAD IMAGES -->
		<script>
			logo_sm = new Image(540,304)
			logo_sm.src = "../img/all/logo_sm_submenu.png";

			logo_sm_2 = new Image(540,235)
			logo_sm_2.src = "../img/all/logo_sm_submenu_small.png"

			logo_z = new Image(540,304);
			logo_z.src = "../img/all/logo_z_submenu.png";

			logo_z_2 = new Image(540,235);
			logo_z_2.src = "../img/all/logo_z_submenu_small.png";
		</script>

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


		
		<script src='js/libraries/jquery_min.js'></script>
		<script src='js/libraries/mobile_detect_min.js'></script>
		<script src='js/header.js'></script>
		
		<script src='js/script_clouds.js'></script> 
		<script src='js/script_stars.js'></script> 
		<script src='js/interaction.js'></script> 
		
		<script src='https://www.youtube.com/iframe_api'></script>

	</body>

</html>


