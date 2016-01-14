<?php
	
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if ( $actual_link != 'http://test.martomagic.com/TESTWEB/ES/star_monsters/index.php') {
		header('Location: http://test.martomagic.com/TESTWEB/ES/star_monsters/index.php');
	}

	include("geoip.inc"); 
	$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
	$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
	geoip_close($gi);

	// Redirect Based on country
	if ($origin == 'ES'){

	} else if ($origin == 'GB') {
		header('Location: http://test.martomagic.com/TESTWEB/UK/zomlings/index.php');
	} else {
		header('Location: http://test.martomagic.com/TESTWEB/INT/zomlings/index.php');
	}

?>