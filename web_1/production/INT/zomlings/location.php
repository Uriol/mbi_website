<?php

	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if ( $actual_link != 'http://test.martomagic.com/INT/zomlings/index.php') {
		header('Location: http://test.martomagic.com/INT/zomlings/index.php');
	}

	// Get location by ip
	include("geoip.inc"); 
	$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
	$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
	geoip_close($gi);

	// Redirect Based on country
	if ($origin == 'ES'){
		header('Location: http://test.martomagic.com/ES/zomlings/index.php');
	} else if ($origin == 'GB') {
		header('Location: http://test.martomagic.com/UK/zomlings/index.php');
	}


?>