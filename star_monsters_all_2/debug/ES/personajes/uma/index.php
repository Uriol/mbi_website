<?php
	include('location.php');
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Star Monsters - UMA</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">

		<!-- Style -->
		<link href='../../../css/reset.css' rel='stylesheet'>
		<link href='../../../css/header/header.css' rel='stylesheet'>
		<link href='../../../css/header/header_tablet.css' rel='stylesheet'>
		<link href='../../../css/header/header_mobile.css' rel='stylesheet'>

		<link href='../../../css/personajes/detail/style_all.css' rel='stylesheet'>
		<link href='../../../css/personajes/detail/style_1200.css' rel='stylesheet'>

		<!-- Footer -->
		<link href='../../../css/footer/footer.css' rel='stylesheet'>

	</head>

	<body>

		<?php
			include('../../header.php');
		?>

		<section class='content'>

			<!-- Menu -->
			<div class='back_menu_container'>
				<div class='back_menu'>
					<ul>
						<a href="http://localhost:8888/mbi_2/star_monsters_all_2/debug/ES/personajes">
							<li id='back_menu_item'>ATRÁS</li>
						</a>
					</ul>
				</div>
			</div>

			<!-- Character detail -->
			<div class='character_detail_full'>
				<!-- <div class='character_detail_out_shadow'> -->
					<div class='character_detail'>
						<div class='character_image'>
						</div>

						<div class='character_info'>
							<div class='character_origin'>
								<p><span>ORIGEN: </span>Cayó sobre una butaca donde dormía un perro.</p>
							</div>

							<div class='character_colors'>
							</div>

							<div class='character_family'>
								<div class='family_image'></div>
							</div>

							<!-- <div class='character_family'>
								<div class='family_icon'>
								</div>
								<div class='family_text'>
									<p class='title'>FAMILIA</p>
									<p class='name'>Tierra</p>
								</div>
							</div> -->

							<div class='character_bio'>
								<p><span>BIO: </span>Es muy inquieto y nervioso. No le gusta nada que se le sienten encima.</p>
							</div>

							<div class='character_game'>
								<!-- <p class='title'>JUEGO FAVORITO</p>
								<p class='name'>BASE</p> -->
								<p><span>JUEGO FAVORITO: </span>BASE</p>
							</div>

							<div class='star_value'>
								<div class='star_value_img'></div>
							</div>

						</div>
					</div>
				<!-- </div> -->
			</div>

			<div class='pre_footer_2'></div>
			<?php
				include('../../footer.php');
			?>

		</section>

		<!-- JS -->
		<script src='../../../js/libraries/jquery_min.js'></script>
		<script src='../../../js/libraries/mobile_detect_min.js'></script>
		<script src='../../../js/header.js'></script>

	</body>

</html>