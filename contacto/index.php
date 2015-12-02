<!DOCTYPE html>
<html>
	<head>
		<title>ABOUT US</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1.0">
		<link href='../css/reset.css' rel='stylesheet'>
		<link href='../css/header.css' rel='stylesheet'>
		<link href='../css/header_tablet.css' rel='stylesheet'>
		<link href='../css/header_mobile.css' rel='stylesheet'>

		<link href='../css/footer.css' rel='stylesheet'>

		<link href='css/style_min_1200.css' rel='stylesheet'>
		<link href='css/style_all.css' rel='stylesheet'>

	</head>

	<body>

			<header>
			<!-- Menu desktop  -->
			<article class='menu'>
				<div id='main_menu'>
					<a href='../index.html'>
						<div id='menu_logo'></div>
					</a>
					<div id='menu_ul_container'>
						<ul class='main_menu'>
							<li class='menu_item' id='red_item'>PRODUCTOS<span> ▼</span></li>
							<a href='../compañia/index.html'>
								<li class='menu_item' id='green_item'>COMPAÑIA</li>
							</a>
							<a href='index.html'>
								<li class='menu_item' id='yellow_item'>CONTACTO</li>
							</a>
						</ul>
					</div>
				</div>
			</article>
			<article id='submenu' class='off'>
				<div id='submenu_products_container'>
					<a href="../productos/star_monsters/index.html">	
						<div id='submenu_product_one' class='submenu_product_start'></div>
					</a>
					<a href="../productos/zomlings/index.html">	
						<div id='submenu_product_two' class='submenu_product_start'></div>
					</a> 
				</div>
			</article>
			<!-- Menu mobile -->
			<div class='menu_mobile'>
				<div class='menu_top_bar_mobile'>
					<a href='../index.html'>
						<div class='menu_mobile_logo'></div>
					</a>
					<div class='menu_mobile_submenu_icon off'></div>
				</div>
				<div class='submenu off'>
					<ul class='main_submenu'>
						<li class='products_li'>PRODUCTOS<span> ▼</span></li>
						<a href="../productos/star_monsters/index.html">	
							<div id='SM_submenu_mobile_logo' class='product_submenu'></div>
						</a>
						<a href="../productos/zomlings/index.html">	
							<div id='Z_submenu_mobile_logo' class='product_submenu'></div>
						</a>
							
						<a href='../compañia/index.html'>	
							<li id='green_item_mobile'>COMPAÑIA</li>
						</a>
						<a href='index.html'>
							<li id='yellow_item_mobile'>CONTACTO</li>
						</a>
					</ul>
				</div>
			</div>
		</header>


		<section class='content'>

			<div class='company_picture'></div>

			<div class='contact_form_container'>

				<h1>CONTÁCTENOS</h1>

				<div class='form_container'>


				    <?php 
						$action=$_REQUEST['action']; 
						if ($action=="")    /* display the contact form */ 
						    { 
						    ?> 
						    <form  action="" method="POST" enctype="multipart/form-data"> 
						    <input type="hidden" name="action" value="submit"> 
						    <!-- Your name:<br>  -->
						    <input name="name" type="text" placeholder="NOMBRE" value="" size="30"/><br> 
						    <!-- Your email:<br>  -->
						    <input name="email" type="text" placeholder="EMAIL" value="" size="30"/><br> 
						    <!-- Your message:<br>  -->
						    <textarea name="message" placeholder="MENSAJE" rows="7" cols="30"></textarea><br> 
						    <input type="submit" value="SEND EMAIL"/> 
						    </form> 
						    <?php 
						    }  
						else                /* send the submitted data */ 
						    { 
						    $name=$_REQUEST['name']; 
						    $email=$_REQUEST['email']; 
						    $message=$_REQUEST['message']; 
						    if (($name=="")||($email=="")||($message=="")) 
						        { 
						        echo "<p>Todos los campos estan requeridos, por favor vuelve a rellenar <a href=\"\">el formulario.</a></p>"; 
						        // echo '<script language="javascript">alert("juas");</script>'; 
						        } 
						    else{         
						        $from="From: $name<$email>\r\nReturn-path: $email"; 
						        $subject="Message sent using your contact form"; 
						        mail("oriol@magicboxint.com", $subject, $message, $from); 
						        echo "<h2>Gracias!</h2>"; 
						        // THANKS!
								//	Your message has been sent and you will receive an email confirmation shortly.
						        } 
						    }   
					?> 	

					</div>

			</div>

			<div class='pre_footer'>
				<div class='pre_footer_img' id='home_pre_footer'></div>
			</div>
			<!-- Footer -->
			<section class='footer'>
				<div class='social_media'>
					<div class='social_media_container'>
						<a href="../../about/index.html">
							<div class='facebook_icon'></div>
						</a>

						<a href="../../about/index.html">
							<div class='twitter_icon'></div>
						</a>
					</div>
				</div>
				<p>© MAGIC BOX TOYS</p>
			</section>

		</section>


		<script src='../js/libraries/jquery_min.js'></script>
		<script src='../js/libraries/mobile_detect_min.js'></script>
		<script src='../js/header.js'></script>

	</body>

</html>