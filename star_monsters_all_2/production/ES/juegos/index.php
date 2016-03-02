<?php
	include('location.php');
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Star Monsters - Juegos</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">

		<!-- Style -->
		<link href='../../css/reset.css' rel='stylesheet'>
		<link href='../../css/header/header.css' rel='stylesheet'>
		<link href='../../css/header/header_tablet.css' rel='stylesheet'>
		<link href='../../css/header/header_mobile.css' rel='stylesheet'>

		<link href='../../css/juegos/style_all.css' rel='stylesheet'>
		<link href='../../css/juegos/style_1200.css' rel='stylesheet'>
		<link href='../../css/juegos/style_850.css' rel='stylesheet'>
		<link href='../../css/juegos/tablets.css' rel='stylesheet'>
		<link href='../../css/juegos/phone.css' rel='stylesheet'>
		<link href='../../css/juegos/phone_portrait.css' rel='stylesheet'>

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
			<section class='info'>
				<article class='info_container'>
					<!-- <div class='text_container'>
						<h1>Juegos</h1>
					</div> -->
					<div class='game' id='game_1_bg'>
						<div class='story_image'>
							<img src='../../img/juegos/game_1.png' >
						</div>
						
					</div>
					<div class='game game_with_video' id='game_2_bg'>
						<div class='story_image_with_video'>
							<img src='../../img/juegos/game_2.png' >
						</div>

						<div class='game_video' id='game_2_video'>
							<div class='iframe_container'>
								<iframe id='player_game_2' src="https://www.youtube.com/embed/eQk2euykEUk?rel=0&amp;showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>

						<div class='video_controls'>
							<!-- Video Thumbnail -->
							<div class='thumbnail_container'>
								<div class='video_thumbnail' id='game_2_video_thumbnail' data-index='1'>
									<div id='game_2_player_icon_container' class='player_icon_container'>
										<div class='player_icon'></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='game' id='game_3_bg'>
						<div class='story_image'>
							<img src='../../img/juegos/game_3.png' >
						</div>
						
					</div>
					<!--  Game 4 -->
					<div class='game game_with_video' id='game_4_bg'>
						<div class='story_image_with_video'>
							<img src='../../img/juegos/game_4.png' >
						</div>

						<div class='game_video' id='game_4_video'>
							<div class='iframe_container'>
								<iframe id='player_game_4' src="https://www.youtube.com/embed/O2PtsEQP_y4?rel=0&amp;showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>

						<div class='video_controls'>
							<!-- Video Thumbnail -->
							<div class='thumbnail_container'>
								<div class='video_thumbnail' id='game_4_video_thumbnail' data-index='3'>
									<div id='game_4_player_icon_container' class='player_icon_container'>
										<div class='player_icon'></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='game' id='game_5_bg'>
						<div class='story_image'>
							<img src='../../img/juegos/game_5.png' >
						</div>
						
					</div>
					<div class='game' id='game_6_bg'>
						<div class='story_image'>
							<img src='../../img/juegos/game_6.png' >
						</div>
					</div>
				</article>
			</section>
			<!-- <div class='pre_footer_2'></div> -->
			<?php
				include('../footer_games.php');
			?>
		</section>

		<script>
			
			game_1_bg = new Image();
			game_1_bg.src = "../../img/juegos/game_1_bg.png";
			game_1 = new Image();
			game_1.src = "../../img/juegos/game_1.png";

			game_2_bg = new Image();
			game_2_bg.src = "../../img/juegos/game_2_bg.png";
			game_2 = new Image();
			game_2.src = "../../img/juegos/game_2.png";

			game_3_bg = new Image();
			game_3_bg.src = "../../img/juegos/game_3_bg.png";
			game_3 = new Image();
			game_3.src = "../../img/juegos/game_3.png";

			game_4_bg = new Image();
			game_4_bg.src = "../../img/juegos/game_4_bg.png";
			game_4 = new Image();
			game_4.src = "../../img/juegos/game_4.png";

			game_5_bg = new Image();
			game_5_bg.src = "../../img/juegos/game_5_bg.png";
			game_5 = new Image();
			game_5.src = "../../img/juegos/game_5.png";



		</script>

		<!-- JS -->
		<script src='../../js/libraries/jquery_min.js'></script>
		<script src='../../js/libraries/mobile_detect_min.js'></script>
		<script src='../../js/header.js'></script>

		<script src='js/script.js'></script>

		<script src='https://www.youtube.com/iframe_api'></script>
		
	</body>
</html>