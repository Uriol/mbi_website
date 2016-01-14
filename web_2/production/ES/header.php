<?php
	header('Location: http://test.martomagic.com/TESTWEB/ES/index.php');
?>


<header>

	<article class='menu'>
		<div id='main_menu'>
			
			<a href='http://test.martomagic.com/TESTWEB/ES/index.php'>
				<div id='menu_logo'></div>
			</a>
			<div id='menu_ul_container'>
				<ul class='main_menu'>
					<li class='menu_item' id='red_item'>PRODUCTOS<span> ▼</span></li>
					<a href="http://test.martomagic.com/TESTWEB/ES/company/index.php">	
						<li class='menu_item' id='green_item'>COMPAÑIA</li>
					</a>
					<a href="http://test.martomagic.com/TESTWEB/ES/contacto/index.php">	
						<li class='menu_item' id='yellow_item'>CONTACTO</li>
					</a>
				</ul>
			</div>
		</div>
	</article>

	<article id='submenu' class='off'>
		<div id='submenu_products_container'>
			
			<a href="http://test.martomagic.com/TESTWEB/ES/star_monsters/index.php">	
				<div id='submenu_product_one' class='submenu_product_start'></div>
			</a>
			
			<a href="http://test.martomagic.com/TESTWEB/ES/zomlings/index.php">	
				<div id='submenu_product_two' class='submenu_product_start'></div>
			</a> 
		</div>
	</article>

	<div class='menu_mobile'>
		<div class='menu_top_bar_mobile'>
			<a href='http://test.martomagic.com/TESTWEB/ES/index.php'>
				<div class='menu_mobile_logo'></div>
			</a>
			<div class='menu_mobile_submenu_icon off'></div>
		</div>
		<div class='submenu off'>
			<ul class='main_submenu'>
				<li class='products_li'>PRODUCTOS<span> ▼</span></li>

				<a href="http://test.martomagic.com/TESTWEB/ES/star_monsters/index.php">
					<div id='SM_submenu_mobile_logo' class='product_submenu'></div>
				</a>
				
				<a href="http://test.martomagic.com/TESTWEB/ES/zomlings/index.php">	
					<div id='Z_submenu_mobile_logo' class='product_submenu'></div>
				</a>
				<a href="http://test.martomagic.com/TESTWEB/ES/company/index.php">	
					<li id='green_item_mobile'>COMPAÑIA</li>
				</a>
				<a href="http://test.martomagic.com/TESTWEB/ES/contacto/index.php">	
					<li id='yellow_item_mobile'>CONTACTO</li>
				</a>
			</ul>
		</div>
	</div>

</header>