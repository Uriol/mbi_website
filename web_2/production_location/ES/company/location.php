<?php

	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if ( $actual_link != 'http://test.martomagic.com/TESTWEB/ES/company/index.php') {
		header('Location: http://test.martomagic.com/TESTWEB/ES/company/index.php');
	}

	// Redirect Based on country
	include("geoip.inc"); 
	$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
	$origin = geoip_country_code_by_addr($gi, $_SERVER["REMOTE_ADDR"]);
	geoip_close($gi);

	// Redirect Based on country
	if ($origin == 'ES'){
		//header('Location: http://localhost:8888/mbi_2/ES/company/index.php');
	} else if ($origin == 'GB') {
		header('Location: http://test.martomagic.com/TESTWEB/UK/company/index.php');
	} else {
		header('Location: http://test.martomagic.com/TESTWEB/INT/company/index.php');
	}

?>