
	<?php
		include('location.php');
	?>


<!DOCTYPE html>
<html>
	<head>
		<title>Company</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<link href='../../css/reset.css' rel='stylesheet'>
		<link href='../../css/header/header.css' rel='stylesheet'>
		<link href='../../css/header/header_tablet.css' rel='stylesheet'>
		<link href='../../css/header/header_mobile.css' rel='stylesheet'>

		<link href='../../css/footer/footer.css' rel='stylesheet'>

		<link href='css/style_all.css' rel='stylesheet'>
		
		<!--  General style -->
		<link href='../../css/company/style_all.css' rel='stylesheet'>
		<link href='../../css/company/phone.css' rel='stylesheet'>

		<link href='../../css/history/style_all.css' rel='stylesheet'>

		<link href='../../css/history/EN/style_1200.css' rel='stylesheet'>
		<link href='../../css/history/EN/style_1000.css' rel='stylesheet'>
		<link href='../../css/history/EN/tablets.css' rel='stylesheet'>
		<link href='../../css/history/EN/phone.css' rel='stylesheet'>

	</head>

	<body>

		<div class='loading'>
		</div>

		<?php
			include('../header.php');
		?>

		<section class='content'>
			<div class='company_pics'>
				<div class='company_image' id='company_image'></div>

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

				<div class='company_pictures_index_container'>
					<div class='company_index_item_on' data-index='0'></div>
					<div class='company_index_item_off' data-index='1'></div>
					<div class='company_index_item_off' data-index='2'></div>
					<div class='company_index_item_off' data-index='3'></div>
				</div>
			</div>

			<div class='company_description'>
				<div class='company_description_container'>
					<h1>MAGIC BOX TOYS HISTORY</h1>
					<p>Magic Box Toys is a global leader in the creation and distribution of collectable toys. Our products are filled with imagination and surprise. We are proud of the excitement we bring to children through our well-designed and highly gratifying concepts. We love the challenge to create new products in order to continue to entertain children worldwide.</p>
				</div>
			</div>

			<div class='company_history'>

				<div class='company_history_container'>

					<div class='columns_container'>
					<!--  LEFT -->
					<div class='history_column_container' id='history_left_column_container'>

						<div class='timeline_item_container left_container red' id='container_1'>
							<div class='h_line_left'></div>
							<div class='v_line_left red'></div>
							<div class='year_container'>
								<h2>2016</h2>
							</div>
							<div class='timeline_item left_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1>Launch of Star Monsters</h1>
								</div>
							</div>
						</div>

						<div class='timeline_item_container left_container green' id='container_4'>
							<div class='h_line_left'></div>
							<div class='timeline_item left_item'>
								<div class='timeline_item_image new_logo'></div>
								<div class='timeline_item_text'>
									<h1>New Logo</h1>
								</div>
							</div>
						</div>

						
						<div class='timeline_item_container left_container red' id='container_6'>
							<div class='h_line_left'></div>
							<div class='v_line_left red'></div>
							<div class='year_container'>
								<h2>2012</h2>
							</div>
							<div class='timeline_item left_item'>
								<div class='timeline_item_image bungees'></div>
								<div class='timeline_item_text'>
									<h1>Launch of Bungees</h1>
								</div>
							</div>
						</div>

						

						
						
						<div class='timeline_item_container left_container yellow' id='container_9'>
							<div class='h_line_left'></div>
							<div class='v_line_left yellow'></div>
							<div class='year_container'>
								<h2>2008</h2>
							</div>
							<div class='timeline_item left_item'>
								<div class='timeline_item_image gogos3'></div>
								<div class='timeline_item_text'>
									<h1>Launch of the third generation of Gogo’s / Crazy Bones</h1>
								</div>
							</div>
						</div>
						

						<div class='timeline_item_container left_container green' id='container_11'>
							<div class='h_line_left'></div>
							<div class='v_line_left green'></div>
							<div class='year_container'>
								<h2>2005</h2>
							</div>
							<div class='timeline_item left_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1 class='subtitle'>Launch of Shoot Out</h1>
									<p>Official F.A. Premier League Trading Card Game. Magic Box create a brand new football trading card game concept.</p>
								</div>
							</div>
						</div>


						<div class='timeline_item_container left_container red' id='container_13'>
							<div class='h_line_left'></div>
							<div class='v_line_left red'></div>
							<div class='year_container'>
								<h2>2000</h2>
							</div>
							<div class='timeline_item left_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1>Launch of the second generation of Gogo’s / Crazy Bones</h1>
								</div>
							</div>
						</div>

						<div class='timeline_item_container left_container yellow' id='container_15'>
							<div class='h_line_left'></div>
							<div class='v_line_left yellow'></div>
							<div class='year_container'>
								<h2>1997</h2>
							</div>
							<div class='timeline_item left_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1>Magic Box create the first Collectable Photo Collection with the Spice Girls</h1>
								</div>
							</div>
						</div>

						<div class='timeline_item_container left_container red' id='container_17'>
							<div class='h_line_left'></div>
							<div class='timeline_item left_item'>
								<div class='timeline_item_text'>
									<h1>Martomagic SL founded</h1>
								</div>
							</div>
						</div>


						<div class='timeline_item_container left_container green' id='container_18'>
							<div class='h_line_left'></div>
							<div class='v_line_left green'></div>
							<div class='year_container'>
								<h2>1995</h2>
							</div>
							<div class='timeline_item left_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1>The first European company to launch “Caps”</h1>
								</div>
							</div>
						</div>


						<div class='timeline_item_container left_container yellow' id='container_20'>
							<div class='h_line_left'></div>
							<div class='timeline_item left_item'>
								<div class='timeline_item_text'>
									<h1>Creation of the Magic Box Int brand name</h1>
									
								</div>
							</div>
						</div>

					</div>



					<!-- RIGHT -->
					<div class='history_column_container' id='history_right_column_container'>

						<div class='timeline_item_container right_container red' id='container_2'>
							<div class='h_line_right'></div>
							<div class='timeline_item right_item'>
								<div class='timeline_item_text'>
									<h1>20th anniversary of Magic Box Toys</h1>
								</div>
							</div>
						</div>

						<div class='timeline_item_container right_container green' id='container_3'>
							<div class='h_line_right'></div>
							<div class='v_line_right green'></div>
							<div class='year_container'>
								<h2>2015</h2>
							</div>
							<div class='timeline_item right_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1>New Offices opened</h1>
								</div>
							</div>
						</div>

						<div class='timeline_item_container right_container yellow' id='container_5' >
							<div class='h_line_right'></div>
							<div class='v_line_right yellow'></div>
							<div class='year_container'>
								<h2>2014</h2>
							</div>
							<div class='timeline_item right_item'>
								<div class='timeline_item_image zomlings'></div>
								<div class='timeline_item_text'>
									<h1>Launch of Zomlings</h1>
								</div>
							</div>
						</div>
						
						<div class='timeline_item_container right_container red' id='container_7'>
							<div class='h_line_right'></div>
							<div class='timeline_item right_item'>
								<div class='timeline_item_text'>
									<h1>Martomagic SL becomes Magic Box Int. Toys, SLU</h1>
								</div>
							</div>
						</div>


						<div class='timeline_item_container right_container green' id='container_8'>
							<div class='h_line_right'></div>
							<div class='v_line_right green'></div>
							<div class='year_container'>
								<h2>2009</h2>
							</div>
							<div class='timeline_item right_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1>Dragon Ball Stoppers created</h1>
								</div>
							</div>
						</div>

						<div class='timeline_item_container right_container red' id='container_10'>
							<div class='h_line_right'></div>
							<div class='v_line_right red'></div>
							<div class='year_container'>
								<h2>2007</h2>
							</div>
							<div class='timeline_item right_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1>Pokemon Rollers created</h1>
								</div>
							</div>
						</div>


						<div class='timeline_item_container right_container yellow' id='container_12'>
							<div class='h_line_right'></div>
							<div class='v_line_right yellow'></div>
							<div class='year_container'>
								<h2>2002</h2>
							</div>
							<div class='timeline_item right_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1>Digimon and Dragon Ball Rappers created</h1>
								</div>
							</div>
						</div>

						<div class='timeline_item_container right_container green' id='container_14'>
							<div class='h_line_right'></div>
							<div class='v_line_right green'></div>
							<div class='year_container'>
								<h2>1999</h2>
							</div>
							<div class='timeline_item right_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1>Pokemon and Dragon Ball Pickers created</h1>
								</div>
							</div>
						</div>

						<div class='timeline_item_container right_container red' id='container_16'>
							<div class='h_line_right'></div>
							<div class='v_line_right red'></div>
							<div class='year_container'>
								<h2>1996</h2>
							</div>
							<div class='timeline_item right_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1>Launch of the first generation of Gogo’s / Crazy Bones</h1>
								</div>
							</div>
						</div>

						<div class='timeline_item_container right_container yellow' id='container_19'>
							<div class='h_line_right'></div>
							<div class='v_line_right yellow'></div>
							<div class='year_container'>
								<h2>1994</h2>
							</div>
							<div class='timeline_item right_item'>
								<div class='timeline_item_image'></div>
								<div class='timeline_item_text'>
									<h1>The creators of collectable trading cards based on football clubs and national teams</h1>
								</div>
							</div>
						</div>


					</div>

				</div>




				<div class='timeline_container_single_column'>

					<div class='timeline_item_container red' id='container_full_1'>
						<div class='year_container'>
							<h2>2016</h2>
						</div>
						<div class='v_line red year'></div>
						
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1>Launch of Star Monsters</h1>
							</div>
						</div>
						<div class='v_line red end'></div>
					</div>



					<div class='timeline_item_container red' id='container_full_2'>
						
						<div class='timeline_item'>
							<div class='timeline_item_text'>
								<h1>20th anniversary of Magic Box Toys</h1>
							</div>
						</div>
						<div class='v_line red end'></div>
					</div>

					<div class='timeline_item_container green' id='container_full_3' >
						<div class='year_container'>
							<h2>2015</h2>
						</div>
						<div class='v_line green year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1>New Offices opened</h1>
							</div>
						</div>
						<div class='v_line green end'></div>
					</div>

					<div class='timeline_item_container green' id='container_full_4'>
						<div class='timeline_item'>
							<div class='timeline_item_image new_logo'></div>
							<div class='timeline_item_text'>
								<h1>New Logo</h1>
							</div>
						</div>
						<div class='v_line green end'></div>
					</div>

					<div class='timeline_item_container yellow' id='container_full_5'>
						<div class='year_container'>
							<h2>2014</h2>
						</div>
						<div class='v_line yellow year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image zomlings'></div>
							<div class='timeline_item_text'>
								<h1>Launch of Zomlings</h1>
							</div>
						</div>
						<div class='v_line yellow end'></div>
					</div>

					<div class='timeline_item_container red' id='container_full_6'>
						<div class='year_container'>
							<h2>2012</h2>
						</div>
						<div class='v_line red year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image bungees'></div>
							<div class='timeline_item_text'>
								<h1>Launch of Bungees</h1>
							</div>
						</div>
						<div class='v_line red end'></div>
					</div>


					<div class='timeline_item_container red' id='container_full_7'>
						<div class='timeline_item'>
							<div class='timeline_item_text'>
								<h1>Martomagic SL becomes Magic Box Int. Toys, SLU</h1>
							</div>
						</div>
						<div class='v_line red end'></div>
					</div>

					<div class='timeline_item_container green' id='container_full_8'>
						<div class='year_container'>
							<h2>2009</h2>
						</div>
						<div class='v_line green year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1>Dragon Ball Stoppers created</h1>
							</div>
						</div>
						<div class='v_line green end'></div>
					</div>

					<div class='timeline_item_container yellow' id='container_full_9'>
						<div class='year_container'>
							<h2>2008</h2>
						</div>
						<div class='v_line yellow year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image gogos3'></div>
							<div class='timeline_item_text'>
								<h1>Launch of the third generation of Gogo’s / Crazy Bones</h1>
							</div>
						</div>
						<div class='v_line yellow end'></div>
					</div>

					<div class='timeline_item_container red' id='container_full_10'>
						<div class='year_container'>
							<h2>2007</h2>
						</div>
						<div class='v_line red year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1>Pokemon Rollers created</h1>
							</div>
						</div>
						<div class='v_line red end'></div>
					</div>

					<div class='timeline_item_container green' id='container_full_11'>
						<div class='year_container'>
							<h2>2005</h2>
						</div>
						<div class='v_line green year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1 class='subtitle'>Launch of Shoot Out</h1>
								<p>Official F.A. Premier League Trading Card Game. Magic Box Int create a brand new football trading card game concept.</p>
							</div>
						</div>
						<div class='v_line green end'></div>
					</div>

					<div class='timeline_item_container yellow' id='container_full_12'>
						<div class='year_container'>
							<h2>2002</h2>
						</div>
						<div class='v_line yellow year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1>Digimon and Dragon Ball Rappers created</h1>
							</div>
						</div>
						<div class='v_line yellow end'></div>
					</div>


					<div class='timeline_item_container red' id='container_full_13'>
						<div class='year_container'>
							<h2>2000</h2>
						</div>
						<div class='v_line red year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1>Launch of the second generation of Gogo’s / Crazy Bones</h1>
							</div>
						</div>
						<div class='v_line red end'></div>
					</div>

					<div class='timeline_item_container green' id='container_full_14'>
						<div class='year_container'>
							<h2>1999</h2>
						</div>
						<div class='v_line green year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1>Pokemon and Dragon Ball Pickers created</h1>
							</div>
						</div>
						<div class='v_line green end'></div>
					</div>

					<div class='timeline_item_container yellow' id='container_full_15'>
						<div class='year_container'>
							<h2>1997</h2>
						</div>
						<div class='v_line yellow year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1>Magic Box Int create the first Collectable Photo Collection with the Spice Girls</h1>
							</div>
						</div>
						<div class='v_line yellow end'></div>
					</div>

					<div class='timeline_item_container red' id='container_full_16'>
						<div class='year_container'>
							<h2>1996</h2>
						</div>
						<div class='v_line red year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1>Launch of the first generation of Gogo’s / Crazy Bones</h1>
							</div>
						</div>
						<div class='v_line red end'></div>
					</div>

					<div class='timeline_item_container red' id='container_full_17'>
						<div class='timeline_item'>
							<div class='timeline_item_text'>
								<h1>Martomagic SL founded</h1>
							</div>
						</div>
						<div class='v_line red end'></div>
					</div>



					<div class='timeline_item_container green' id='container_full_18'>
						<div class='year_container'>
							<h2>1995</h2>
						</div>
						<div class='v_line green year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1>The first European company to launch “Caps”</h1>
							</div>
						</div>
						<div class='v_line green end'></div>
					</div>

					<div class='timeline_item_container yellow' id='container_full_19'>
						<div class='year_container'>
							<h2>1994</h2>
						</div>
						<div class='v_line yellow year'></div>
						<div class='timeline_item'>
							<div class='timeline_item_image'></div>
							<div class='timeline_item_text'>
								<h1>The creators of collectable trading cards based on football clubs and national teams</h1>
							</div>
						</div>
						<div class='v_line yellow end'></div>
					</div>

					<div class='timeline_item_container  yellow' id='container_full_20'>
						<div class='h_line_right'></div>
						<div class='timeline_item '>
							<div class='timeline_item_text'>
								<h1>Creation of the Magic Box Int brand name</h1>
							</div>
						</div>
					</div>


					</div>
				</div>
			</div> 


			<div class='pre_footer'>
				<div class='pre_footer_img' id='home_pre_footer'></div>
			</div>
			<!-- Footer -->
			<?php 
				include('../footer.php');
			?>


		</section>

		<script>
			logo_sm = new Image(540,304)
			logo_sm.src = "../../img/all/logo_sm_submenu.png";

			logo_sm_2 = new Image(540,235)
			logo_sm_2.src = "../../img/all/logo_sm_submenu_small.png"

			logo_z = new Image(540,304);
			logo_z.src = "../../img/all/logo_z_submenu.png";

			logo_z_2 = new Image(540,235);
			logo_z_2.src = "../../img/all/logo_z_submenu_small.png";
		</script>


		<script src='../js/libraries/jquery_min.js'></script>
		<script src='../js/libraries/mobile_detect_min.js'></script>
		<script src='../js/header.js'></script>
		<script src='../../js/company/script.js'></script>
		

	</body>

</html>