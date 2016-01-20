<?php
	include('location.php');
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Star Monsters - Juegos</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

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
							<img src='../../img/juegos/game_1.png' >
						</div>
						<div class='filet'></div>
					</div>
					<div class='game'>
						<div class='story_image'>
							<img src='../../img/juegos/game_2.png' >
						</div>
						<div class='filet'></div>
					</div>
					<div class='game'>
						<div class='story_image'>
							<img src='../../img/juegos/game_3.png' >
						</div>
						<div class='filet'></div>
					</div>
					<div class='game'>
						<div class='story_image'>
							<img src='../../img/juegos/game_4.png' >
						</div>
						<div class='filet'></div>
					</div>
					<div class='game'>
						<div class='story_image'>
							<img src='../../img/juegos/game_5.png' >
						</div>
						<div class='filet'></div>
					</div>
					<div class='game'>
						<div class='story_image'>
							<img src='../../img/juegos/game_6.png' >
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
	</body>
</html>