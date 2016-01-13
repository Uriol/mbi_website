<?php

	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if ( $actual_link != 'http://www.magicboxint.com/UK/contact/index.php') {
		header('Location: http://www.magicboxint.com/UK/contact/index.php');
	}

	// Get location by ip
	include("geoip.inc"); 
	$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
	$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
	geoip_close($gi);

	// Redirect Based on country
	if ($origin == 'ES'){
		header('Location: http://www.magicboxint.com/ES/contacto/index.php');
	} else if ($origin == 'GB') {

	} else {
		header('Location: http://www.magicboxint.com/INT/contact/index.php');
	}


?>