<?php
	include('location.php');
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Star Monsters - Games</title>
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
					<div class='game'>
						<div class='story_image'>
							<img src='../../img/juegos/game_1_uk.png' >
						</div>
						<div class='filet'></div>
					</div>
					<div class='game'>
						<div class='story_image'>
							<img src='../../img/juegos/game_2_uk.png' >
						</div>
						<div class='filet'></div>
					</div>
					<div class='game'>
						<div class='story_image'>
							<img src='../../img/juegos/game_3_uk.png' >
						</div>
						<div class='filet'></div>
					</div>
					<div class='game'>
						<div class='story_image'>
							<img src='../../img/juegos/game_4_uk.png' >
						</div>
						<div class='filet'></div>
					</div>
					<div class='game'>
						<div class='story_image'>
							<img src='../../img/juegos/game_5_uk.png' >
						</div>
						<div class='filet'></div>
					</div>
					<div class='game'>
						<div class='story_image'>
							<img src='../../img/juegos/game_6_uk.png' >
						</div>
					</div>
				</article>
			</section>
			<?php
				include('../footer.php');
			?>
		</section>

		<!-- JS -->
		<script src='../../js/libraries/jquery_min.js'></script>
		<script src='../../js/libraries/mobile_detect_min.js'></script>
		<script src='../../js/header.js'></script>

		<script src='js/script.js'></script>
	</body>
</html>