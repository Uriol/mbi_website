<?php
	// Make sure we are not in a fake sub folder
	// If we are redirect to the correct one
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	// echo $actual_link;
	if ( $actual_link != 'http://test.martomagic.com/TESTWEB/ES/index.php') {
		header('Location: http://test.martomagic.com/TESTWEB/ES/index.php');
	}

	// Get location by ip
	include("geoip.inc"); 
	$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
	$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
	geoip_close($gi);

	// Redirect Based on country
	if ($origin == 'ES'){
		
	} else if ($origin == 'GB') {
		header('Location: http://test.martomagic.com/TESTWEB/UK/index.php');
	} else {
		header('Location: http://test.martomagic.com/TESTWEB/INT/index.php');
	}
	
?>