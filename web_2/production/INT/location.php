<?php

	// Make sure we are not in a fake sub folder
	// If we are redirect to the correct one
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	// echo $actual_link;
	if ( $actual_link != 'http://www.magicboxint.com/INT/index.php') {
		header('Location: http://www.magicboxint.com/INT/index.php');
	}

	// Get location by ip
	include("geoip.inc"); 
	$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
	$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
	geoip_close($gi);

	// Redirect Based on country
	if ($origin == 'ES'){
		header('Location: http://www.magicboxint.com/ES/index.php');
	} else if ($origin == 'GB') {
		header('Location: http://www.magicboxint.com/UK/index.php');
	}

?>