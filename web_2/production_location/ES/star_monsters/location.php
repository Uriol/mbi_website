<?php
	
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if ( $actual_link != 'http://www.magicboxint.com/ES/star_monsters/index.php') {
		header('Location: http://www.magicboxint.com/ES/star_monsters/index.php');
	}

	include("geoip.inc"); 
	$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
	$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
	geoip_close($gi);

	// Redirect Based on country
	if ($origin == 'ES'){

	} else if ($origin == 'GB') {
		header('Location: http://www.magicboxint.com');
	} else {
		header('Location: http://www.magicboxint.com/INT/star_monsters/index.php');
	}

?>